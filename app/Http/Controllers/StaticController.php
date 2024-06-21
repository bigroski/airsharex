<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bigroski\Tukicms\App\Models\Post;
use Bigroski\Tukicms\App\Classes\Services\PostService;
use Bigroski\Tukicms\App\Classes\Services\CategoryService;
use Bigroski\Tukicms\App\Classes\Services\TagService;
use Bigroski\Tukicms\App\Classes\Services\CommentService;
use App\Classes\Services\ServiceService;
use App\Mail\ContactForm;
use Http;
use Mail;
use Auth;
class StaticController extends Controller
{
    //

	public function __construct(private PostService $postService,
		private CategoryService $categoryService,
		private TagService $tagService,
		private CommentService $commentService,
		private ServiceService $serviceService
	){

	}
	public function home(){
		return view('html.testPage');
	}
	public function about(){
		return view('html.about');
	}
	public function services(){
		$allServices = $this->serviceService->getAll();
		// dump($allServices);
		return view('html.services')->with([
			'services'=> $allServices
		]);
	}
	public function blog(){
		$posts = Post::all();
		return view('html.blog')->with([
			'posts' => $posts
		]);
	}
	public function blogDetail($blog_id){
		$posts = Post::find($blog_id);
		return view('html.blogDetail')->with([
			'post' => $posts
		]);
	}
	public function signup(){
		return view('html.login');
	}
	public function register(){
		return view('html.register');
	}
	public function forgetpassord(){
		return view('html.forgetpassord');
	}
	public function history(){
		return view('html.history');
	}
	public function ourstory(){
		return view('html.ourstory');
	}
	public function contact(){
		return view('html.contact');
	}
	public function policy(){
		return view('html.policy');
	}
	public function disclaimer(){
		return view('html.disclaimer');
	}
	public function gallery(){
		return view('html.gallery');
	}
	public function emailverify(){
		return view('html.emailverify');
	}
	public function account(){
		return view('html.account');
	}
	public function search(){
		return view('html.search');
	}
	public function checkout(){
		return view('html.checkout');
	}
	public function news(){
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
	public function newsdetail($slug){
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

	public function newsSearch(Request $request){
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
	public function processContact(Request $request){
		$response = Http::withOptions(['verify' => false])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
		    'secret' => '6LekVwsTAAAAAJYCvQewgxiGM_pUMhkT5AdfgsOO',
		    'response' => $request->get('g-recaptcha-response'),
		]);
		if($response->json('success') == true){

			Mail::to('pratik.raghubanshi@gmail.com')->send(new ContactForm($request->all()));
			$request->session()->flash('success', 'Thank you for Contacting Us');
		}else{
			$request->session()->flash('error', 'Please verify you are not a bot.');

		}
		return redirect()->back();
	}
	public function processComment(Request $request){
		$response = Http::withOptions(['verify' => false])->asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
		    'secret' => '6LekVwsTAAAAAJYCvQewgxiGM_pUMhkT5AdfgsOO',
		    'response' => $request->get('g-recaptcha-response'),
		]);
		if($response->json('success') == true){

			$this->commentService->makeComment($request);
			$request->session()->flash('success', 'Thank you for Contacting Us');
		}else{
			$request->session()->flash('error', 'Please verify you are not a bot.');

		}
		return redirect()->back();
	}
	public function category($slug){
		
		$selectedCategory = $this->categoryService->findBySlug('category',$slug);
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
	public function tag($slug){
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
	public function updateAccount(Request $request){
		
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

	public function changePassword($request){

	}
}
