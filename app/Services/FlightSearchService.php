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
    public function getFLightSearchData($masterSearchId)
    {
       return  FlightSearchDetail::where('search_master_id',$masterSearchId)->first();
    }
}
