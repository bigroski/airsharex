<?php

namespace App\Http\Controllers;

use App\Classes\Services\CustomerService;
use App\Exceptions\ApiErrorException;
use App\Http\Requests\BookingOnDemandRequest;
use App\Http\Requests\FlightBookigRequest;
use App\Jobs\StoreBookingOnDemandData;
use App\Jobs\StoreFlightTicketDetail;
use App\Services\ApiService;
use App\Services\FlightBookingService;
use App\Services\FlightSearchService;
use Bigroski\Tukicms\App\Models\Customer;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon as SupportCarbon;

class BookingController extends Controller
{
    public function __construct(
        private ApiService $apiService,
        private CustomerService $customerService,
        private FlightSearchService $flightSearchService,
        private FlightBookingService $flightBookingService
        // private PassengerService $passengerService
    ) {}

    public function bookFlight(FlightBookigRequest $request)
    {

        try {
            $tripId = $request['trip_id'];
            $user = $request->user();
            $customerData = [
                "name" => $request['name'],
                "email" => $request['email'],
                "phone" => $request['phone'],
                "address" => $request['address'],
                "city" => $request['city'],
                "state" => $request['state'],
                "user_id" => $user->id,
            ];
            $customer =  $this->customerService->findBy('user_id', $user->id) ?? $this->customerService->createFlightBookigCustomer($customerData);
            // $customer =  $this->customerService->makeCustomer($request);
            $data = [
                "CustomerMapId" => $customer->id,
                "Country" => $request->country,
                "City" => $request->city,
                "Address" => $request->address,
                'name' => $request->name,
                'Email' => $request->email,
                'PhoneNumber' => $request->phone,
                'type' => "Customer",
            ];
            if (!$customer->api_customer_id) {
                $airCustomerId = null;
                $airCustomer = $this->apiService->getCustomer($data);

                if ($airCustomer['ResultCode'] != 200) {
                    $newAirCustomer  = $this->apiService->registerCustomer($data);
                    if ($newAirCustomer['ResultCode'] === 200) {
                        $airCustomerId = $newAirCustomer['ResultData']['CustomerDetails']['CustomerId'];
                        // dd('if ' . $airCustomerId, $newAirCustomer);
                    }
                } else {
                    $airCustomerId = $airCustomer['ResultData']['CustomerDetails']['CustomerId'];
                    // dd('else ' . $airCustomerId, $airCustomerId);
                }
                $customer->api_customer_id = $airCustomerId;
                $customer->save();
            }
            // dd($airCustomer);
            $fligtSearchData = $this->flightSearchService->getFLightSearchData($tripId);
            $bookingData = [
                "TxnRefId" => md5(Carbon::now()->toDateString() . rand()),
                "TotalSeat" => $fligtSearchData->requested_seats,
                "SearchMasterId" => $fligtSearchData->search_master_id,
                "TripId" => $tripId,
                "CustomerId" => $user->id,
            ];
            // dd($fligtSearchData);
            logger('booking data', $bookingData);
            $resultData = $this->apiService->bookTrip($bookingData);
            // Storing Oof Flight Booking Data          

            if ($resultData['ResultCode'] == 200) {
                $flightData['booking_reference_id'] = $resultData['TransactionRefId'];
                $flightData['ticket_number'] = $this->getResponseData($resultData['ResultData'], 'TicketBookingNumber');
                $flightData['search_master_id'] = $fligtSearchData->search_master_id;
                $flightData['customer_id'] = $user->id;
                $flightData['payment_method'] = 'COD';
                $flightData['requested_seats'] = $fligtSearchData->requested_seats;
                $flightData['flight_data'] = json_encode($resultData['ResultData']);
                $flightData['flight_date'] = $fligtSearchData->queue_date;
                $flightData['trip_id'] = $tripId;
                $this->flightSearchService->storeFlightticketDetails($flightData);
                $bookingDetails = $resultData['ResultData']['DHTicketBookingResult'];
                $salutations = $this->apiService->getSalutation();
                $genders = $this->apiService->getGender();
                $nationalities = $this->apiService->getNationality();
                $user = $request->user();
                $user->phone = $user->phone ?? $request->phone;
                $user->save();
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

    public function getResponseData($result, $key)
    {
        $detail = $result['DHTicketBookingResult'];

        return $detail[$key];
    }

    public function redirectToPayment(Request $request)
    {
        $passengers = $request->get('PassengerDetail');
        $ticket_number = $request->get('ticket_booking_number');
        $user = $request->user();
        $localTicket = $this->flightBookingService->getTicketByTicketNo($ticket_number);
        $this->flightBookingService->createBookingPassenger($localTicket, $passengers);
        // $ticket =  $this->apiService->getTicketByTicketNo([
        //     "TicketBookingNo" => $ticket_number, //"F1DE9866-C4DC-4C68-B472-537B3F881093",
        //     "CustomerId" => $user->id
        // ]);
        $flightData = json_decode($localTicket->flight_data);
        $paymentData = [];
        $request->session()->flash('success', 'Thank you for booking with Us');
        return redirect()->route('profile.edit');
        dd($flightData);
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
                $bookingData['PaymentDetail']['paymentReferenceId']
            ));
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
        $apiToken = session()->get('asx_api_token');
        $data =  $this->apiService->getTicketByTicketNo($data);

        return view('html.flight_ticket', compact('data'));
    }

    public function flightOnDemand(Request $request)
    {

        $cities = $this->apiService->getCity();
        // $nationalities = $this->apiService->getNationality();
        $heliServiceTypes = $this->apiService->getHeliServiceTypes();
        return view('html.flight_ondemand', compact('cities', 'heliServiceTypes'));
    }
    public function flightOnDemandStore(BookingOnDemandRequest $request)
    {
        $total_passanger = $request['adult_passanger'] + $request['child_passanger'] ?? 0 + $request['infant_passanger'] ?? 0;
        $date = Carbon::now();
        $bookingId = strtotime($date);
        $serviceType = $request['service_type'];
        $serviceParts = explode(' - ', $serviceType);

        $serviceId = $serviceParts[0];
        $serviceName = $serviceParts[1];
        $requestData = [
            "BookingID" => $bookingId,
            "ArrivalDate" => $request['arrival_date'],
            "ReturnDated" => $request['return_date'],
            "ServiceTypeId" => $serviceId,
            "ServiceType" => $serviceName,
            "BookingName" => $request['booking_name'],
            "EmailId" => $request['email'],
            "ContactNumber" => $request['contact_number'],
            "DestinationFrom" => $request['destination_from'],
            "DestinationTo" => $request['destination_to'],
            "TotalPax" =>  $total_passanger,
            "AdultPax" => $request['adult_passanger'],
            "ChildPax" => $request['child_passanger'],
            "InfantPax" => $request['infant_passanger'],
            "PickupLocation" => $request['pickup_location'],
            "BookingNotes" => $request['booking_notes']
        ];
        $response = $this->apiService->bookingOnDemand($requestData);
        $storeData = $request->all();
        $storeData['total_passanger'] = $total_passanger;
        $storeData['booking_id'] = $bookingId;
        $storeData["status"] =  $response["ResultCode"];
        $storeData['transaction_ref_id'] = $response["TransactionRefId"];
        // dd($response["ResultData"]["Error"]);
        $storeData["status_message"] = $response["ResultData"]["Error"][0]["ErrorMessage"];
        //  dd($response);
        dispatch(new StoreBookingOnDemandData($request->all()));
        $storeData['service_type'] = $serviceName;
        return view('html.flight_ondemand_detail', compact('storeData'));
    }
}
