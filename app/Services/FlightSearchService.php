<?php

namespace App\Services;

use App\Models\FlightSearchDetail;
use Exception;

class FlightSearchService
{
    public function storeSerachData($data)
    {
        return FlightSearchDetail::create($data);
    }
    public function getFLightSearchData($tripId)
    {
       return  FlightSearchDetail::where('trip_id',$tripId)->first();
    }
}
