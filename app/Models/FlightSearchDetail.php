<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSearchDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "trip_id",
        "search_master_id",
        "queue_date",
        "data",
        "requested_seats",
        "transaction_ref_id"
    ];
    protected $casts = [
        'id' => 'integer',
        'queue_date' => 'date',
        'data' => 'array'
    ];
}
