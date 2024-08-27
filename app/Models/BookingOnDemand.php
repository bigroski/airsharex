<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingOnDemand extends Model
{
    use HasFactory;

    protected $fillable = [
 "id",
  "booking_id",
  "arrival_date",
  "return_date",
  "service_type",
  "booking_name",
  "email_id",
  "contact_number",
  "destination_from",
  "destination_to",
  "total_passanger",
  "adult_passanger",
  "child_passanger",
  "infant_passanger",
  "pickup_location",
  "booking_notes",
  "status",
  "status_message",  
  "transaction_ref_id"
    ];

protected $casts = [
    'id' => 'integer',
     "arrival_date" => 'date',
  "return_date" => 'date',
];
    
}
