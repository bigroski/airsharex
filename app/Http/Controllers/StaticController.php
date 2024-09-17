<?php

namespace App\Http\Controllers;

use App\Classes\Services\GalleryService;
use Illuminate\Http\Request;
use Bigroski\Tukicms\App\Models\Post;
use Bigroski\Tukicms\App\Classes\Services\PostService;
use Bigroski\Tukicms\App\Classes\Services\CategoryService;
use Bigroski\Tukicms\App\Classes\Services\TagService;
use Bigroski\Tukicms\App\Classes\Services\CommentService;
use App\Classes\Services\ServiceService;
use App\Exceptions\ApiErrorException;
use App\Jobs\FlightSearchStore;
use App\Mail\ContactForm;
use App\Services\ApiService;
use App\Services\FlightSearchService;
use App\Models\Service;
use Http;
use Mail;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class StaticController extends Controller
{
	//

	public function __construct(
		private PostService $postService,
		private CategoryService $categoryService,
		private TagService $tagService,
		private CommentService $commentService,
		private ServiceService $serviceService,
		private GalleryService $galleryService,
		private ApiService $apiService,
		private FlightSearchService $flightSearchService
	) {
	}
	public function home()
	{

		$response = $this->apiService->authenticate();
		// dd($response);
		$city = $this->apiService->getCity();
		return view('html.testPage');
	}
	public function about()
	{
		return view('html.about');
	}
	public function services()
	{
		$allServices = $this->serviceService->getAll();
		// dump($allServices);
		return view('html.services')->with([
			'services' => $allServices
		]);
	}
	public function servicesdetail($service_id)
	{
		$service = Service::find($service_id);
		// dump($service);
		return view('html.servicesdetail')->with([
			'service' => $service
		]);
	}
	
	public function blog()
	{
		$posts = Post::all();
		return view('html.blog')->with([
			'posts' => $posts
		]);
	}
	public function blogDetail($blog_id)
	{
		$posts = Post::find($blog_id);
		return view('html.blogDetail')->with([
			'post' => $posts
		]);
	}
	public function signup()
	{
		return view('html.login');
	}
	public function register()
	{
		return view('html.register');
	}
	public function forgetpassord()
	{
		return view('html.forgetpassord');
	}
	public function history()
	{
		return view('html.history');
	}
	public function ourstory()
	{
		return view('html.ourstory');
	}
	public function contact()
	{
		return view('html.contact');
	}
	public function policy()
	{
		return view('html.policy');
	}
	public function disclaimer()
	{
		return view('html.disclaimer');
	}
	public function gallery()
	{
		$galleries = $this->galleryService->getAllData();
		return view('html.gallery', ['galleries' => $galleries]);
	}
	public function emailverify()
	{
		return view('html.emailverify');
	}
	public function account()
	{
		return view('html.account');
	}
	public function search(Request $request)
	{
		// dump($request->all());
		$customMessage = [
			'from.required' => 'The Departure field is required.',
			'to.required' => 'The Destination field is required.',
			'nationality.required' => 'The Nationality field is required.',
			'heliServiceType.required' => 'The Heli Service Type field is required.',
			'seat_count.min' => 'The min seat count must be a 1',
			'start_date.required' => 'The Departure Date field is required',
			'start_date.after_or_equal' => 'The Departure Date must be today or a future date'
		];
		$validator = Validator::make($request->all(), [
			'from' => 'required',
			'to' => 'required',
			'nationality' => 'required',
			'heliServiceType' => 'required',
			'seat_count' => 'required|numeric|min:1',
			'start_date' => 'required|date|after_or_equal:' . Carbon::now()->toDateString(),

		], $customMessage);

		if ($validator->fails()) {
			return back()->withErrors($validator)->withInput();
		}
		$data = $request->all();
		$searchData = $data;
		$fromCity = $request['from'];

		$fromCityParts = explode(' - ', $fromCity);

		$fromCityId = $fromCityParts[0];
		$fromCityName = $fromCityParts[1];
		$toCity = $request['to'];
		$toCityParts = explode(' - ', $toCity);
		$tripDate = new Carbon($request['start_date']);
		$toCityId = $toCityParts[0];
		$toCityName = $toCityParts[1];
		$data = [
			"fromCityId" => $fromCityId,
			"fromCity" => $fromCityName,
			"toCityId" => $toCityId,
			"toCity" => $toCityName,
			"tripDate" => $tripDate->format('Y-m-d'),
			"serviceTypeId" => (int) $request['heliServiceType'],
			"nationalityCode" => $request['nationality'],
			"seatCount" => $request['seat_count'],
			"pageNumber" => isset($request['pageNumber']) ? $request['pageNumber'] : 1,
			"pageSize" => isset($request['pageSize']) ? $request['pageSize'] : 10,
		];

		$serchData = $this->apiService->serchTrip($data);
		// dump($serchData);
		if ($serchData['ResultCode'] == 200) {
			$returnData = isset($serchData['ResultData']['TripSearch']['TripSearchResult']) ? $serchData['ResultData']['TripSearch']['TripSearchResult'] : [];
			$transactionRefId = $serchData['TransactionRefId'];
			$searchMasterId = $serchData['ResultData']['TripSearch']['SearchMasterId'];
			// dispatch(new FlightSearchStore($returnData,$request['seat_count'],$transactionRefId));		
			$seatCount = $request['seat_count'] ?? 1;
			$TransactionRefId = $serchData['TransactionRefId'];
			$cities = $this->apiService->getCity();
			$nationalities = $this->apiService->getNationality();
			$heliServiceTypes = $this->apiService->getHeliServiceTypes();
			return view('html.search', compact('returnData', 'seatCount', 'TransactionRefId', 'cities', 'nationalities', 'heliServiceTypes', 'searchMasterId', 'searchData'));
		} else {
			logger('api fetch error', $serchData['ResultData']);
			throw new ApiErrorException("Error on fetching trip search " . $serchData['ResultData']['Error'][0]["ErrorMessage"], $serchData['ResultCode']);
		}
	}
	public function checkout(Request $request)
	{

		$tripId = $request['trip_id'];
		$seatCount = $request['total_seat'];
		// dump($tripId);
		// dump($seatCount);
		$transactionRefId = $request['TxnRefId'];
		$masterSerarchId = $request['masterSerarchId']??$request['referenc'];
		$tripData =  ['TripId' => $tripId];
		$resultData = $this->apiService->tripDetails($tripData);
		
		if ($resultData['ResultCode'] === 200) {
			$flightResultData = isset($resultData["ResultData"]["TripSearch"]["TripSearchResult"]) ? $resultData["ResultData"]["TripSearch"]["TripSearchResult"] : [];
			// dump($flightResultData);

			dispatch(new FlightSearchStore($flightResultData, $seatCount, $transactionRefId, $masterSerarchId));

			$flightData = $flightResultData[0];
			// dump($flightData);
			$user = $request->user();
			// dd($user);
			return view('html.checkout', compact('flightData', 'user', 'seatCount'));
		} else {
			logger('api fetch error', $resultData['ResultData']);
			throw new ApiErrorException("Error on fetching trip details " . $resultData['ResultData']['Error'][0]["ErrorMessage"], $resultData['ResultCode']);
		}
	}
	public function news()
	{
		$posts = $this->postService->paginatePosts();
		$categories = $this->categoryService->getAllCategories();
		$recent = $this->postService->getLatestArticles(2);
		$popularCategories = $this->tagService->getPopular();
		return view('html.news')->with([
			'posts' => $posts,
			'categories' => $categories,
			'popularTags' => $popularCategories,
			'recents' => $recent,


		]);
	}
	public function newsdetail($slug)
	{
		$post = $this->postService->getPostBySlug($slug);
		$recent = $this->postService->getLatestArticles(2);
		$categories = $this->categoryService->getAllCategories();
		$popularCategories = $this->tagService->getPopular();
		return view('html.newsdetail')->with([
			'post' => $post,
			'recents' => $recent,
			'categories' => $categories,
			'popularTags' => $popularCategories
		]);
	}

	public function newsSearch(Request $request)
	{
		$posts = $this->postService->searchByTitle($request->get('query'));
		$recent = $this->postService->getLatestArticles(2);
		$categories = $this->categoryService->getAllCategories();
		$popularCategories = $this->tagService->getPopular();
		return view('html.news')->with([
			'posts' => $posts,
			'recents' => $recent,
			'categories' => $categories,
			'popularTags' => $popularCategories
		]);
	}
	public function processContact(Request $request)
	{
		$response = Http::withOptions(['verify' => false])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
			'secret' => '6LekVwsTAAAAAJYCvQewgxiGM_pUMhkT5AdfgsOO',
			'response' => $request->get('g-recaptcha-response'),
		]);
		if ($response->json('success') == true) {

			Mail::to('pratik.raghubanshi@gmail.com')->send(new ContactForm($request->all()));
			$request->session()->flash('success', 'Thank you for Contacting Us');
		} else {
			$request->session()->flash('error', 'Please verify you are not a bot.');
		}
		return redirect()->back();
	}
	public function processComment(Request $request)
	{
		$response = Http::withOptions(['verify' => false])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
			'secret' => '6LekVwsTAAAAAJYCvQewgxiGM_pUMhkT5AdfgsOO',
			'response' => $request->get('g-recaptcha-response'),
		]);
		if ($response->json('success') == true) {

			$this->commentService->makeComment($request);
			$request->session()->flash('success', 'Thank you for Contacting Us');
		} else {
			$request->session()->flash('error', 'Please verify you are not a bot.');
		}
		return redirect()->back();
	}
	public function category($slug)
	{

		$selectedCategory = $this->categoryService->findBySlug('category', $slug);
		// dd($selectedCategory);
		$posts = $selectedCategory->posts()->paginate();
		$categories = $this->categoryService->getAllCategories();
		$recent = $this->postService->getLatestArticles(2);

		$popularCategories = $this->tagService->getPopular();


		return view('html.news')->with([
			'posts' => $posts,
			'popularTags' => $popularCategories,
			'recents' => $recent,
			'selectedCategory' => $selectedCategory,
			'categories' => $categories
		]);
	}
	public function tag($slug)
	{
		// dd($slug);
		$selectedCategory = $this->tagService->findBySlug('tag', $slug);
		// dd($selectedCategory);
		$posts = $selectedCategory->posts()->paginate();
		$categories = $this->categoryService->getAllCategories();
		$recent = $this->postService->getLatestArticles(2);

		$popularCategories = $this->tagService->getPopular();


		return view('html.news')->with([
			'posts' => $posts,
			'popularTags' => $popularCategories,
			'recents' => $recent,
			'selectedCategory' => $selectedCategory,
			'categories' => $categories
		]);
	}
	public function updateAccount(Request $request)
	{

		$user = Auth::user();
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;
		$user->phone = $request->phone;
		$user->address_one = $request->address_one;
		$user->address_two = $request->address_two;
		$user->city = $request->city;
		$user->state = $request->state;
		$user->save();
		uploadToMedia($user, $request, 'citizenship');
		uploadToMedia($user, $request, 'avatar');
		$request->session()->flash('success', 'Profile successfully updated');
		return redirect()->back();
	}

	public function changePassword($request)
	{
	}

	public function popularRoute(Request $request, $routeID){
		$returnData = $this->apiService->getRouteDetail($routeID);
		$title = $request->get('name');
		return view('html.popular', compact('returnData', 'title', 'routeID'));

	}

	private function  searchData()
	{
		return $data = json_decode(
			'[{
				  "SearchMasterId": "A98B48B9-38A5-4744-9986-C11EB0EC65BF",
				  "MYQueueId": "F0B5BE4E-72A1-4244-9E87-2B14FB0BD80B",
				  "MYQueueDate": "2024-06-30",
				  "MYQueueDateBS": "2081-03-17",
				  "MYOperatorId": "200013",
				  "MYOperatorName": "Precious Travals",
				  "MYOperatorNameNP": "Precious Travals",
				  "MYHeliId": "20",
				  "MYHeliName": "Everest Heli",
				  "MYHeliNumber": "GA.01.KHA Sikorsky R-4",
				  "MYHeliTypeId": "1010",
				  "MYHeliType": "Normal Heli",
				  "ParentRouteId": "2025",
				  "ParentRouteName": "Kathmandu - Annapurna Base Camp",
				  "RouteId": "2025",
				  "RouteName": "Kathmandu - Annapurna Base Camp",
				  "RouteNameNP": "Kathmandu - Annapurna Base Camp",
				  "NumberOfSeat": "10",
				  "AvailableSeat": "10",
				  "TicketSellingRate": "26100.00",
				  "HasOffer": "N",
				  "ActualRate": 0,
				  "NewRate": 0,
				  "RateDifferentInAmount": 0,
				  "RateDifferentInPercent": 0,
				  "OperationShiftId": "2",
				  "OperationShift": "Day",
				  "DepartureCityId": "1",
				  "DepartureCity": "Kathmandu",
				  "ArrivalCityId": "61",
				  "ArrivalCity": "Annapurna Base Camp",
				  "ArrivalTime": "02:00:00",
				  "DepartureTime": "00:00:00",
				  "ArrivalStationId": "213",
				  "ArrivalStation": "Annapurna Base Camp",
				  "DepartureStation": "Thulo Bharyang",
				  "RouteDistance": "15000.00",
				  "ExpectedTravelDuration": "2.00",
				  "CarriageId": "26",
				  "CarriageNumberRef": "GA.01.KHA Sikorsky R-4",
				  "QueueStatusId": "1",
				  "QueueStatus": "Open",
				  "HeliThumbnail": "",
				  "OperatorLogo": "",
				  "HeliRatingPoint": "5.00",
				  "OperatorRatingPoint": "5.00",
				  "PickupStation": [
					{
					  "StationCode": "DCEDCDB2-CD09-44E3-85C9-9F71E5ADF6E5",
					  "StationName": "Thulo Bharyang",
					  "ExpectedTime": "00:00:00",
					  "StationType": "Pickup"
					}
				  ],
				  "DropoffStation": [
					{
					  "StationCode": "29E8EE56-9898-453C-96C8-A60EF085DA0E",
					  "StationName": "Annapurna Base Camp",
					  "ExpectedTime": "02:00:00",
					  "StationType": "Dropoff"
					}
				  ],
				  "Amenities": [],
				  "HeliImages": [],
				  "BookingPolicy": "<p><b>Policies:</b>\r\n\t<p><b>कोरोना महामारी ( कोभिड १९ )को कारण ले बसको सिट संख्या न्युनतम ३०% भन्दा कम बिक्री भएको खण्डमा बसको समय तालिका हेरफेर वा बस स्थगित हुन सक्नेछ। यस्तो अवस्थामा यात्रुलाई संम्भव भए सम्मअन्य बसमा ब्यबस्थापन गरिनेछ, अथवा टिकट बराबरको सम्पूर्ण रकम फिर्ता गरिनेछ। अत्याबश्यक काम नपरे सम्म यात्रा नगरौं, यदी यात्रा गर्नै परेमा नेपाल सरकारको स्वास्थ्य मापदण्डको पालना गरौं । कोरोना बाट आफु बचौं , अरुलाई पनि बचाउं।\"\r\n\t</b></p>\r\n\r\n\t<p> १.\tटिकट क्यान्सिल गर्नुपरेमा बस छुट्ने समय भन्दा ३ घण्टा अगावै यस कम्पनीको फोन नं मा सम्पर्क गरी टिकट क्यान्सिल गर्न सक्नु हुनेछ र २५% क्यान्सिलेसन चार्ज काटी बाँकी रहेको रकम फिर्ता गरिनेछ। अन्यथा टिकेट क्यान्सिल हुनेछैन। अथवा सोही टिकेट अन्य दिनलाई सार्नु परेमा पनि ३ घण्टा पूर्व नै जानकारी गराउनुपर्नेछ सारिएको टिकटको कुनै पनि शुल्क लाग्ने छैन सो टिकेट बाट १५ दिन भित्रमा यात्रा गरिसक्नुपर्नेछ।</p>\r\n\t<p> २.\tकारणवश कुनैपनि समयमा सेवा स्थगित तथा समय हेरफेर हुनसक्नेछ सेवा स्थगित भएको खण्डमा यात्रुको टिकट को सम्पुर्ण रकम फिर्ता गरिनेछ।</p>\r\n\t<p> ३.\tउल्लेखित समयमा यात्रु नआइपुगी बस छुटेमा कम्पनी जवाफदेही हुनेछैन र अन्य व्यवस्था को लागि बाध्य हुनेछैन।</p>\r\n\t<p> ४.\tकुनै कारणवश गाडी बिच बाटोमा रोकिएमा यात्रुले आफ्नो सामानको सुरक्षा तथा खानपानको व्यवस्था आफैले गर्नु पर्नेछ। महत्वपूर्ण सामानहरु जस्तै गरगहना, ल्यापटप, मोबाइल, क्यामरा भएको ब्याक यात्रुले आफ्नो निगरानीमा राख्नु पर्नेछ सो सामानहरु हराएमा कम्पनी जवाफदेही हुनेछैन।</p>\r\n\t<p> ५.\tबसको डिकीमा राखिएको कुनै पनि बिधुतीय सामाग्री तथा सिसा जन्य वस्तुहरु टुटफुट भएमा कम्पनी जवाफदेही हुनेछैन। कुनै पनि व्यापारिक प्रयोजनको लागि लगिएको सामानको बिलबिजक अनिवार्यरुपमा यात्रुले आफ्नो साथमा राख्नुपर्नेछ सुरक्षाकर्मीको चेकजाँचको क्रममा सो बिलबिजक सुरक्षाकर्मीलाई उपलब्ध गराउनु पर्नेछ।</p>\r\n\t<p> ६.\tबसमा यात्रुले एउटा लगेज ब्याग र ह्याण्ड ब्याग निःशुल्क लैजान पाउने छ अन्य सामानहरूको कम्पनीको नियम अनुसार भाडा लाग्नेछ भाडाको विषयमा कुनैपनि वादविवाद गर्न पाउने छैन। यात्रुको लगेज बाहेक अन्य कुनैपनि सामान बसमा राखिने छैन।</p>\r\n\t<p> ७.\tयात्रा अवधिभर बसभित्र मदिराजन्य तथा सुर्तिजन्य पदार्थ सेवन र धारिलो सामग्री हातहतियार पूर्ण रुपमा बन्देज तथा प्रतिबन्ध गरिएको छ।</p>\r\n\t<p> ८.\tकुनैपनि यात्रुले यात्रा अवधिभर अन्य यात्रुलाई बाधा पुग्ने गरी होहल्ला अपशब्द अनैतिक कार्य तथा यौनजन्य क्रियाकलाप गरेको पाइएमा तुरुन्त सुरक्षा कर्मीलाई जानकारी गराई कारबाहीको सिफारिस गरिने छ।</p>\r\n\t<p> ९.\tनेपाल सरकार द्वरा प्रतिबन्धित मालसमानहरु लुकाईछिपाई बसमा लैजान पाइने छैन। यात्रा अवधिभर टिकेट साथमै राख्नु होला तथा अपरिचित ब्यक्तिले दिएको खानेकुराहरु नखाई दिनुहोला र कुनै पनि व्यक्तिमाथि शंका लागेमा बस स्टाप वा १०० मा सम्पर्क गरी जानकारी गराइ दिनुहोला।</p>\r\n\t<p>१०.\tयात्रु महानुभावहरुले टिकेट खरिद गर्दा आफ्नो सक्कली नाम, ठेगाना, मोबाइल नम्बर तथा आफ्नो नजिकको नाता लाग्ने व्यक्तिको मोबाइल नम्बर पनि उल्लेखित गर्नुपर्नेछ र यात्रुले आफ्नो परिचय खुल्ने परिचयपत्र पनि साथमा राख्नु पर्नेछ।</p>\r\n\t<p>११.\tकुनैपनि यात्रीले बसको सामग्रीहरू च्यात्ने फुटाउने बस स्टप अरुलाई अपशब्द प्रयोग गर्ने धम्क्याउने अनावश्यक सिट बुक गराई दुःख दिने कार्य गरेमा नेपाल सरकारको प्रचलित कानुन अनुसार कारबाही हुनेछ।</p>\r\n\t<p>१२.\tनेपाल सरकारले तोकेको भाडा दर भन्दा अतिरिक्त भाडा लिइने छैन यदि बढी भाडा लिएको शंका लागेमा हाम्रो केन्द्रित कार्यालय तथा १०३ मा सम्पर्क गरी जानकारी गराउन सक्नुहुनेछ र विदेशी यात्रुहरुलाई पर्यटक बसमा भाडा फरक पर्न सक्नेछ।</p>\r\n\t<p>१३.  प्रत्येक यात्रुको ५०,००००/- (पचास हजार) यात्रु बिमा सुरक्षित गरिएको छ । </p>"
				}]'
		);
	}
}
