<?php

namespace App\Http\Controllers;

use App\Classes\Services\CustomerService;
use App\Exceptions\ApiErrorException;
use App\Http\Requests\FlightBookigRequest;
use App\Services\ApiService;
use App\Services\FlightBookingService;
use App\Services\FlightSearchService;
use Bigroski\Tukicms\App\Models\Customer;
use Exception;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct(
        private ApiService $apiService,
        private CustomerService $customerService,
        private FlightSearchService $flightSearchService,
        private FlightBookingService $flightBookingService
        ){

    }
    public function test(){

    }
    public function bookFlight(Request $request){
        
         try{
        //     $tripId = $request['trip_id'];
        //     $customerData = [               
        //         "name" =>$request['name'],
        //         "email" => $request['email'],
        //         "phone" => $request['phone'],
        //         "address" => $request['address'],
        //         "city" => $request['city'],
        //         "state" => $request['state'],
 
        //     ];
           
        //    $customer =  $this->customerService->createFlightBookigCustomer($customerData);
        // //    dd($customer);

        // $customer =  $this->customerService->makeCustomer($request);  
        //     $data = [ 
        //         "CustomerMapId"=> $customer->id,              
        //         "Country"=>$request->country,
        //         "City"=> $request->city,
        //         "Address"=> $request->address,
        //         'name' => $request->name,
        //         'Email' => $request->email,
        //         'PhoneNumber' => $request->phone,
        //         'type'=>"Customer"];
        //     // dispatch(new RegisterCustomer($data,$customer->id) );
        //     $airCustomer  = $this->apiService->registerCustomer($data);
        //     // dd($data,$airCustomer);
        //     // $customer = Customer::where('id',$customer->id)->first();
        //     // $customer->api_customer_id = $airCustomer->id;
        //     // $customer->save();
        //    $fligtSearchData = $this->flightSearchService->getFLightSearchData($tripId);
        //    $bookingData = [
        //     "TxnRefId"=> "1234566",
        //     "TotalSeat"=> $fligtSearchData->requested_seats,
        //     "SearchMasterId"=>"6FD9ADBA-8496-4813-A377-E5EE20A988B6",//$fligtSearchData->search_master_id,
        //     "TripId"=> $tripId,
        //     "CustomerId"=> $customer->id,
        // ];
        // logger('booking data',$bookingData);
        // // dd('flight search data',$fligtSearchData, $bookingData );
        //    $resultData = $this->apiService->bookTrip($bookingData);
        // //    dd("booking details",$resultData);
        // if($resultData['ResultCode']==200){
            
            $bookingDetails= [];//$resultData['ResultData']['DHTicketBookingResult'];
            $salutations = $this->apiService->getSalutation();
            $genders = $this->apiService->getGender();
            $nationalities = $this->apiService->getNationality();
            return view('html.flight_booking',compact('bookingDetails','salutations','genders','nationalities'));
          
        // }else{
        //     logger('api fetch error',$resultData['ResultData']);
		// 	throw new ApiErrorException("Error on fetching trip details ".$resultData['ResultData']['Error'][0]["ErrorMessage"],$resultData['ResultCode']);
        // }

        }catch(Exception $e){
            logger("book flight".$e->getMessage());
            dd('exception',$e->getMessage());

        }

    }
}
