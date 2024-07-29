<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBookingDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "trip_id",
        "flight_date",
        "customer_id",
        "booking_reference_id",
        "payment_method",
        "payment_ref_id",
        "flight_data",
    "requested_seats"
    ];
    protected $casts = [
        'id' => 'integer',
        'customer_id'=>'integer',
        'flight_date' => 'date',
         "flight_data"=>'array'
    ];
}
