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
use App\Models\BookingOnDemand;
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
    // Came Here
    public function bookFlight(Request $request)
    {
        $user = $request->user();
        
        $search_id = $request->flight_search_detail_id;
        $fligtSearchData = $this->flightSearchService->getFlightDataById($search_id);
        // dd($fligtSearchData);
        // try {
            $tripId = $request['trip_id'];
            $customerData = [
                "name" => $user ? $user->name : $request['name'],
                "email" => $user ? $user->email : $request['email'],
                "phone" => $user ? $user->phone : $request['phone'],
                "address" => $user ? $user->address : $request['address'],
                "city" => $user ? $user->city : $request['city'],
                "state" => $user ? $user->state : $request['state'],
                "user_id" => $user ? $user->id : null,
            ];
            if($user){
                $customer =  $this->customerService->findBy('user_id', $user->id);

            }else{

                $customer =  $this->customerService->createFlightBookigCustomer($customerData);
            }
            // dd($customer);
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
                    }
                } else {
                    $airCustomerId = $airCustomer['ResultData']['CustomerDetails']['CustomerId'];
                }
                $customer->api_customer_id = $airCustomerId;
                $customer->save();
            }
            // $fligtSearchData = $this->flightSearchService->getFLightSearchData($tripId);
            

            // dd($fligtSearchData);
            $bookingData = [
                "TxnRefId" => md5(Carbon::now()->toDateString() . rand()),
                "TotalSeat" => $fligtSearchData->requested_seats,
                // "TotalSeat" => $fligtSearchData->requested_seats,
                "SearchMasterId" => $fligtSearchData->search_master_id,
                "TripId" => $tripId,
                "CustomerId" => $user ? $user->email : $request['email'],
            ];
            // dump($bookingData);
            // dd($fligtSearchData);
            logger('booking data', $bookingData);
            // dd($bookingData);
            $resultData = $this->apiService->bookTrip($bookingData);
            // dump($resultData);
            // Storing Oof Flight Booking Data          

            if ($resultData['ResultCode'] == 200) {
                $flightData['booking_reference_id'] = $resultData['TransactionRefId'];
                $flightData['ticket_number'] = $this->getResponseData($resultData['ResultData'], 'TicketBookingNumber');
                $flightData['search_master_id'] = $fligtSearchData->search_master_id;
                $flightData['customer_id'] = $user ? $user->id : null;
                $flightData['payment_method'] = 'COD';
                $flightData['requested_seats'] = $fligtSearchData->requested_seats;
                $flightData['flight_data'] = json_encode($resultData['ResultData']);
                $flightData['flight_date'] = $fligtSearchData->queue_date;
                $flightData['trip_id'] = $tripId;
                $flightData['total_seats'] = $request->total_seats;
                $flightData['total_amount'] = $request->total_amount;
                $localTicket = $this->flightSearchService->storeFlightticketDetails($flightData);

                $bookingDetails = $resultData['ResultData']['DHTicketBookingResult'];
                $salutations = $this->apiService->getSalutation();
                $genders = $this->apiService->getGender();
                $nationalities = $this->apiService->getNationality();
                $user = $request->user();
                if($user){

                    $user->phone = $user->phone ?? $request->phone;
                    $user->save();
                }
                // Need to perform Flight Confirm here
                $this->autoConfirm($request, $flightData['ticket_number']);
                return $this->verifyAndConfirm($request, $flightData['ticket_number']);
                // End of flight confirm here
                // return view('html.flight_booking', compact('bookingDetails', 'salutations', 'genders', 'nationalities', 'user'));
            } else {
                logger('api fetch error', $resultData['ResultData']);
                throw new ApiErrorException("Error on fetching trip details " . $resultData['ResultData']['Error'][0]["ErrorMessage"], $resultData['ResultCode']);
            }
        // } catch (Exception $e) {
        //     logger("book flight" . $e->getMessage());
        //     return back()->withErrors($e->getMessage())->withInput();
        // }
    }

    public function getResponseData($result, $key)
    {
        $detail = $result['DHTicketBookingResult'];

        return $detail[$key];
    }

    public function autoConfirm(Request $request, $ticket_number)
    {
        $passengers = $request->get('PassengerDetail');
        $ticket_number = $ticket_number;
        // $ticket_number = $request->get('ticket_booking_number');
        $user = $request->user();
        $customer = [
            'name' => $user ? $user->name : $request->get('name'),
            'phone' => $user ? $user->phone : $request->get('phone')
        ];
        $localTicket = $this->flightBookingService->getTicketByTicketNo($ticket_number);
        $this->flightBookingService->setBookingCustomer($localTicket, $customer);
        $this->flightBookingService->createBookingPassenger($localTicket, $passengers);
        
        $flightData = json_decode($localTicket->flight_data);
        $paymentData = [];
        // $request->session()->flash('success', 'Thank you for booking with Us');
        // return redirect()->route('verify.ticket', $ticket_number);
        // return redirect()->route('profile.edit');
        // dd($flightData);
    }
    
    public function redirectToPayment(Request $request)
    {
        $passengers = $request->get('PassengerDetail');
        $ticket_number = $request->get('ticket_booking_number');
        $user = $request->user();
        $localTicket = $this->flightBookingService->getTicketByTicketNo($ticket_number);
        $this->flightBookingService->setBookingCustomer($localTicket, $request);
        $this->flightBookingService->createBookingPassenger($localTicket, $passengers);
        
        $flightData = json_decode($localTicket->flight_data);
        $paymentData = [];
        $request->session()->flash('success', 'Thank you for booking with Us');
        return redirect()->route('verify.ticket', $ticket_number);
        // return redirect()->route('profile.edit');
        // dd($flightData);
    }


    public function verifyAndConfirm(Request $request, $ticket_number){
    // public function verifyAndConfirm(Request $request, $ticket_number){
        // dd($request->user());
        // try{
            $user = $request->user();
            $localTicket = $this->flightBookingService->getTicketByTicketNo($ticket_number);
            $flightData = json_decode($localTicket->flight_data);
            // dd($flightData);
            $email = $user ? $user->email : $request->get('email');
            $apiTicket = $this->apiService->getTicketByTicketNo(['TicketBookingNo' => $ticket_number, 'CustomerId' => $email]);
            
            $bookingData = [
                "NationalityCode" => $apiTicket['NationalityCode'] ?? 'NP',
                "Nationality" => $apiTicket['Nationality']??"Nepalese",
                "EmailId" => $email,
                "ContactNo" => $user->phone ?? "9878787878",
                "EmergencyContactNo" => $localTicket->booking_emergency_contact,
                "BookingName" => $localTicket->booking_name,
                "SpecialInstruction" => "N/A",
                "ReceivedAmount" => $flightData->DHTicketBookingResult->TotalAmount,
                "TotalAmount" => $flightData->DHTicketBookingResult->TotalAmount,
                "TicketBookingNo" => $flightData->DHTicketBookingResult->TicketBookingNumber,
                "CustomerId" => $user ? $user->id : $email,

                "PaymentDetail" => [
                    "paymentReferenceId" => "123er",
                    "paymentMethodId" => "1",
                    "paymentMethod" => "card",
                    "totalAmount" => $flightData->DHTicketBookingResult->TotalAmount,
                    "receivedAmount" => $flightData->DHTicketBookingResult->TotalAmount,
                    "cardTypeId" => "1",
                    "cardType" => "DEBIT",
                    "cardNumber" => '5399330000012640',
                    "cardHolderName" => 'SUJAN TEST',
                    "cardBankId" => "234",
                    "cardBank" => "himalayan bank",
                    "cardExpiryDate" =>  '04/2027',
                    "cardAuthorizeBy" => "string",
                    "bankId" => "1234",
                    "bankName" => "Himalayan bank",
                    "walletId" => "234",
                    "walletName" => "himilayan",
                    "voucherCode" => "avg12",
                    "customerId" => $email,
                ],
            ];

            $passengers = $localTicket->passengers;
            // dump($passengers);
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
                    "PassengerName" => $passenger->name,
                    "Age" => '-',
                    "GenderId" => $genderId,
                    "Gender" => $genderName,
                    "MobileNo" => '-',
                    "EmergencyContactNo" => '-',
                    "EmailId" => '-'
                ];
            }
            $bookingData['PassengerDetail'] = $passengerDetail;
            // dd($bookingData);
            $resultData =  $this->apiService->ConfirmBooking($bookingData);
            if($resultData['ResultMessage'] == 'Success'){
                $this->flightBookingService->markAsConfirmed($localTicket);
                $request->session()->flash('success', 'Thank you for Booking has been verified');
            }else{
            
                dump($bookingData);
                dd($resultData);

                $request->session()->flash('success', 'Unable to proceed');

                // return back()->withErrors("Unable to Proceed, Data Mismatch");

            }
            return redirect()->route('site.thankyou.booking');
        // } catch (Exception $e) {
        //     logger("book flight" . $e->getMessage());
        //     return back()->withErrors($e->getMessage())->withInput();
        // }    
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
    public function flightOnDemandStore(Request $request)
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
        // dd($requestData);
        $response = $this->apiService->bookingOnDemand($requestData);
        if($response['ResultMessage'] == 'Success'){

            $storeData = $request->all();
            $storeData['total_passanger'] = $total_passanger;
            $storeData['booking_id'] = $bookingId;
            $storeData["status"] =  $response["ResultCode"];
            $storeData['transaction_ref_id'] = $response["TransactionRefId"];
            $storeData["status_message"] = $response["ResultData"]["Error"][0]["ErrorMessage"];
            
            $storeData['service_type'] = $serviceName;
            $demand = BookingOnDemand::create($storeData);
            // dd($demand);
            // dispatch(new StoreBookingOnDemandData($request->all()));
            $request->session()->flash('success', 'Thank you . Your request is being processed.');        
        }else{
            $request->session()->flash('success', 'Unable to process Request');        

        }
        return redirect()->route('site.thankyou');
        // return view('html.thankyou', compact('storeData'));
    }
}
