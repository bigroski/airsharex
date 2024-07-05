<?php

namespace App\Http\Controllers;

use App\Classes\Services\CustomerService;
use App\Http\Requests\FlightBookigRequest;
use App\Services\ApiService;
use App\Services\FlightBookingService;
use App\Services\FlightSearchService;
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
    public function bookFlight(FlightBookigRequest $request){
        
        try{
            $tripId = $request['trip_id'];
            $customerData = [               
                "name" =>$request['name'],
                "email" => $request['email'],
                "phone" => $request['phone'],
                "address" => $request['address'],
                "city" => $request['city'],
                "state" => $request['state'],
 
            ];
           
           $customer =  $this->customerService->createFlightBookigCustomer($customerData);
        //    dd($customer);
           $fligtSearchData = $this->flightSearchService->getFLightSearchData($tripId);
           $bookingData = [
            "TxnRefId"=> "string",
            "TotalSeat"=> $fligtSearchData->requested_seats,
            "SearchMasterId"=>$fligtSearchData->search_master_id,
            "TripId"=> $tripId,
            "CustomerId"=> $customer->id,
        ];
           $bookingDetails = $this->apiService->bookTrip($bookingData);
            $flightBookingStoreData = [
                 "trip_id" => $tripId,
                "payment_method" =>$request['payment_method'],
                "customer_id"=>$customer->id,
                'flight_data'=>$bookingDetails,
                'search_master_id'=>$fligtSearchData->search_master_id,
                'requested_seats'=>$fligtSearchData->requested_seats,
                // 'flight_date'=>$fligtSearchData->data['tripDate']
            ];
            $this->flightBookingService->store( $flightBookingStoreData);
          


        }catch(Exception $e){
            logger("book flight".$e->getMessage());

        }

    }
}
