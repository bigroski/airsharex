<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBookingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "search_master_id",
        "trip_id",
        "flight_date",
        "customer_id",
        "booking_reference_id",
        "customer_data",
        "payment_method",
        "payment_ref_id",
        "flight_data"
    ];
    protected $casts = [
        'id' => 'integer',
        'customer_id'=>'integer',
        'flight_date' => 'date',
        'customer_data' => 'array',
         "flight_data"=>'array'
    ];
}
