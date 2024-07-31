<?php

namespace App\Services;

use App\Models\FlightBookingDetails;
use Exception;

class FlightBookingService
{
    public function store($data)
    {
        return FlightBookingDetails::create($data);
    }
    public function getFLightSearchData($tripId)
    {
       return  FlightBookingDetails::where('trip_id',$tripId)->first();
    }
    public function getTicketByTicketNo($ticketNumber){
        return FlightBookingDetails::where('ticket_number', $ticketNumber)->first();
    }
    public function createBookingPassenger($ticket, $passengers){
        // dump($passengers);
        foreach($passengers as $passenger){

            $ticket->passengers()->create($passenger);
        }
        // dd($ticket);
    }   
}
