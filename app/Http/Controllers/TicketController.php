<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiErrorException;
use App\Services\ApiService;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function __construct(private ApiService $apiService) {}
    public function getTicket(Request $request)
    {
        $user = $request->user();
        $ticketData['TicketBookingNo'] = $request->get("ticket_no");
        $ticketData["CustomerId"] = $user->email;
        // $ticketData["CustomerId"] = "sanjayatripathi@gmail.com";
        $resultData = $this->apiService->getTicket($ticketData);
        if ($resultData["ResultCode"] == 200) {
            $data = $resultData['ResultData']['TicketDetailResult'];
            return view('html.flight_ticket', compact('data'));
        } else {
            logger('api fetch error', $resultData['ResultData']);
            throw new ApiErrorException("Error on fetching trip search " . $resultData['ResultData']['Error'][0]["ErrorMessage"], $resultData['ResultCode']);
        }        

    }
}
