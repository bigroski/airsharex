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

    public function setBookingCustomer($localTicket, $customer){
        $localTicket->booking_name = $customer['name'];
        $localTicket->booking_emergency_contact = $customer['phone'];
        $localTicket->save();
    }
    public function markAsConfirmed($localTicket){
        $localTicket->payment_status = 'paid';
        $localTicket->confirmation_status = 'confirmed';
        $localTicket->save();
    }

    public function getTotalCount(){
        return FlightBookingDetails::count();
    }
    public function getTotalDemandCount(){
        return BookingOnDemand::count();
    }
    public function getLatestBookings(){
        return FlightBookingDetails::orderBy('created_at','desc')->take(10)->get();
    }
    public function getLatestDemands(){
        return BookingOnDemand::orderBy('created_at','desc')->take(10)->get();

    }
}
