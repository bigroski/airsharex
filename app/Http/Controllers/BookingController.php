<?php

namespace App\Http\Controllers;

use App\Classes\Services\CustomerService;
use App\Exceptions\ApiErrorException;
use App\Http\Requests\FlightBookigRequest;
use App\Services\ApiService;
use App\Services\FlightBookingService;
use App\Services\FlightSearchService;
use Bigroski\Tukicms\App\Models\Customer;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct(
        private ApiService $apiService,
        private CustomerService $customerService,
        private FlightSearchService $flightSearchService,
        private FlightBookingService $flightBookingService
    ) {
    }

    public function bookFlight(FlightBookigRequest $request)
    {
        try {
            $tripId = $request['trip_id'];
            $customerData = [
                "name" => $request['name'],
                "email" => $request['email'],
                "phone" => $request['phone'],
                "address" => $request['address'],
                "city" => $request['city'],
                "state" => $request['state'],
            ];
            $customer =  $this->customerService->createFlightBookigCustomer($customerData);
            $customer =  $this->customerService->makeCustomer($request);
            $data = [
                "CustomerMapId" => $customer->id,
                "Country" => $request->country,
                "City" => $request->city,
                "Address" => $request->address,
                'name' => $request->name,
                'Email' => $request->email,
                'PhoneNumber' => $request->phone,
                'type' => "Customer"
            ];
            $airCustomer  = $this->apiService->registerCustomer($data);
            $fligtSearchData = $this->flightSearchService->getFLightSearchData($tripId);
            // dd($fligtSearchData);
            $bookingData = [
                "TxnRefId" =>  Carbon::now()->toDateString(),
                "TotalSeat" => $fligtSearchData->requested_seats,
                "SearchMasterId" => $fligtSearchData->search_master_id,
                "TripId" => $tripId,
                "CustomerId" => $customer->id,
            ];
            logger('booking data', $bookingData);
            $resultData = $this->apiService->bookTrip($bookingData);
            // dd($resultData);
            if ($resultData['ResultCode'] == 200) {
                $bookingDetails = $resultData['ResultData']['DHTicketBookingResult'];
                $salutations = $this->apiService->getSalutation();
                $genders = $this->apiService->getGender();
                $nationalities = $this->apiService->getNationality();
                return view('html.flight_booking', compact('bookingDetails', 'salutations', 'genders', 'nationalities'));
            } else {
                logger('api fetch error', $resultData['ResultData']);
                throw new ApiErrorException("Error on fetching trip details " . $resultData['ResultData']['Error'][0]["ErrorMessage"], $resultData['ResultCode']);
            }
        } catch (Exception $e) {
            logger("book flight" . $e->getMessage());
            return back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function confirmBooking(Request $request)
    {
        $user = $request->user();
        $bookingData = [
            "NationalityCode" => "NP",
            "Nationality" => "Nepalese",
            "EmailId" => $user->email,
            "ContactNo" => $user->mobile,
            "EmergencyContactNo" => $request["emargency_contact_number"],
            "BookingName" => $request["bookinf_name"],
            "SpecialInstruction" => "test",
            "ReceivedAmount" => $request["ReceivedAmount"],
            "TotalAmount" => $request["TotalAmount"],
            "TicketBookingNo" => $request["TicketBookingNo"],
            "CustomerId" => $request["CustomerId"],
        ];

        //     "PaymentDetail": {
        //       "paymentReferenceId": "string",
        //       "paymentMethodId": "string",
        //       "paymentMethod": "string",
        //       "totalAmount": 0,
        //       "receivedAmount": 0,
        //       "cardTypeId": "string",
        //       "cardType": "string",
        //       "cardNumber": "string",
        //       "cardHolderName": "string",
        //       "cardBankId": "string",
        //       "cardBank": "string",
        //       "cardExpiryDate": "string",
        //       "cardAuthorizeBy": "string",
        //       "bankId": "string",
        //       "bankName": "string",
        //       "walletId": "string",
        //       "walletName": "string",
        //       "voucherCode": "string",
        //       "customerId": "string"
        //     },
        //     "NationalityCode": "string",
        //     "Nationality": "string",
        //     "EmailId": "string",
        //     "ContactNo": "string",
        //     "EmergencyContactNo": "string",
        //     "BookingName": "string",
        //     "PassengerDetail": [
        //       {
        //         "SalutationId": 0,
        //         "Salutation": "string",
        //         "PassengerName": "string",
        //         "Age": 0,
        //         "GenderId": 0,
        //         "Gender": "string",
        //         "MobileNo": "string",
        //         "EmergencyContactNo": "string",
        //         "EmailId": "string"
        //       }
        //     ],
        //     "SpecialInstruction": "string",
        //     "ReceivedAmount": 0,
        //     "TotalAmount": 0,
        //     "TicketBookingNo": "string",
        //     "CustomerId": "string"
        //}
    }
}
