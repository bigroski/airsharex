<?php

namespace App\Services;

use App\Models\BookingOnDemand;
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
    public function storeBookingOnDemandData($data){
        return BookingOnDemand::create($data);
        
    }

    public function setBookingCustomer($localTicket, $request){
        $localTicket->booking_name = $request->get('booking_name');
        $localTicket->booking_emergency_contact = $request->get('emergency_contact_number');
        $localTicket->save();
    }
    public function markAsConfirmed($localTicket){
        $localTicket->payment_status = 'paid';
        $localTicket->confirmation_status = 'confirmed';
        $localTicket->save();
    }
}
