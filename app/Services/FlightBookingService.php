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

    public function storeBookingOnDemandData($data){
        return BookingOnDemand::create($data);
        
    }
}
