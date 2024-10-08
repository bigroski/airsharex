<?php

namespace App\Services;

use App\Models\FlightBookingDetails;
use App\Models\FlightSearchDetail;
use Exception;

class FlightSearchService
{
    public function storeSerachData($data)
    {
        return FlightSearchDetail::create($data);
    }
    public function getFlightDataById($id)
    {
       return  FlightSearchDetail::find($id);
    }
    public function getFLightSearchData($tripId)
    {
       return  FlightSearchDetail::where('trip_id',$tripId)->first();
    }

    public function storeFlightticketDetails($data){
        // dd($data);
        return FlightBookingDetails::create($data);
    }
}
