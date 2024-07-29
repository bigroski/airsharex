<?php

namespace App\Http\Controllers;

use App\Classes\Services\CustomerService;
use App\Exceptions\ApiErrorException;
use App\Http\Requests\FlightBookigRequest;
use App\Jobs\StoreFlightTicketDetail;
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
            $user = $request->user();
            $airCustomer  = $this->apiService->registerCustomer($data);
            $fligtSearchData = $this->flightSearchService->getFLightSearchData($tripId);
            $bookingData = [
                "TxnRefId" => md5(Carbon::now()->toDateString() . rand()) ,
                "TotalSeat" => $fligtSearchData->requested_seats,
                "SearchMasterId" => $fligtSearchData->search_master_id,
                "TripId" => $tripId,
                "CustomerId" => $user->id,
            ];
            logger('booking data', $bookingData);
            $resultData = $this->apiService->bookTrip($bookingData);
            // dd($bookingData, $resultData );
            if ($resultData['ResultCode'] == 200) {
                $bookingDetails = $resultData['ResultData']['DHTicketBookingResult'];
                $salutations = $this->apiService->getSalutation();
                $genders = $this->apiService->getGender();
                $nationalities = $this->apiService->getNationality();
                $user = $request->user();
                return view('html.flight_booking', compact('bookingDetails', 'salutations', 'genders', 'nationalities', 'user'));
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
            "ContactNo" => $user->mobile ?? "9878787878",
            "EmergencyContactNo" => $request["emergency_contact_number"],
            "BookingName" => $request["booking_name"],
            "SpecialInstruction" => "test",
            "ReceivedAmount" => $request["total_amount"],
            "TotalAmount" => $request["total_amount"],
            "TicketBookingNo" => $request["ticket_booking_number"],
            "CustomerId" => $user->id,

            "PaymentDetail" => [
                "paymentReferenceId" => "123er",
                "paymentMethodId" => "1",
                "paymentMethod" => "card",
                "totalAmount" => $request["total_amount"],
                "receivedAmount" => $request["total_amount"],
                "cardTypeId" => "1",
                "cardType" => $request['card_type'],
                "cardNumber" => $request['card_number'],
                "cardHolderName" => $request['card_holders_name'],
                "cardBankId" => "234",
                "cardBank" => "himalayan bank",
                "cardExpiryDate" =>  $request['card_expiry_date'],
                "cardAuthorizeBy" => "string",
                "bankId" => "1234",
                "bankName" => "Himalayan bank",
                "walletId" => "234",
                "walletName" => "himilayan",
                "voucherCode" => "avg12",
                "customerId" => $user->id,
            ],
        ];

        $passengers = $request->get('PassengerDetail');
        $passengerDetail = [];
        foreach ($passengers as $passenger) {
            $requestSalutation = $passenger['salutation'];
            $salutation = explode(' - ', $requestSalutation);
            $salutationId = $salutation[0];
            $salutationName = $salutation[1];
            $requestGender = $passenger['gender'];
            $gender = explode(' - ', $requestGender);
            $genderId = $gender[0];
            $genderName = $gender[1];
            $passengerDetail[] = [

                "SalutationId" => $salutationId,
                "Salutation" => $salutationName,
                "PassengerName" => $passenger['name'],
                "Age" => $passenger['age'],
                "GenderId" => $genderId,
                "Gender" => $genderName,
                "MobileNo" => $passenger['phone'],
                "EmergencyContactNo" => $passenger['emergency_contact_number'],
                "EmailId" => $passenger['email']
            ];
        }
        $bookingData['PassengerDetail'] = $passengerDetail;
        $ResultData =  $this->apiService->ConfirmBooking($bookingData);
       
        if ($ResultData["ResultCode"] == 200) {
            $data = $ResultData['ResultData']['TicketDetailResult'];
            dispatch(new StoreFlightTicketDetail(
                $data, 
                $user->id,                 
                $request["ticket_booking_number"],
                $bookingData['PaymentDetail']['paymentMethod'],
                $bookingData['PaymentDetail']['paymentReferenceId']));            
            return view('html.flight_ticket', compact('data'));
        } else {
            // dd($bookingData,$data);
            logger('api fetch error', $ResultData['ResultData']);
            throw new ApiErrorException("Error on fetching trip search " . $ResultData['ResultData']['Error'][0]["ErrorMessage"], $ResultData['ResultCode']);
        }
    }
    public function getTicketDetail(Request $request, $ticketNo)
    {

        $user = $request->user();
        $data = [
            "TicketBookingNo" => $ticketNo, //"F1DE9866-C4DC-4C68-B472-537B3F881093",
            "CustomerId" => $user->id
        ];
        $data =  $this->apiService->getTicketByTicketNo($data);

        return view('html.flight_ticket', compact('data'));
    }
}
