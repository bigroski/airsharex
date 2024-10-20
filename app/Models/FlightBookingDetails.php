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
        "requested_seats",
        "search_master_id",
        'ticket_number',
        'total_seats',
        'total_amount',
        'payment_method',
        'search_master_id',
        'payment_status',
        'confirmation_status',
        'booking_name',
        'emergency_contact_number'
    ];
    protected $casts = [
        'id' => 'integer',
        'customer_id'=>'integer',
        'flight_date' => 'date',
         "flight_data"=>'array'
    ];
    public function passengers(){
        return $this->hasMany(Passenger::class, 'flight_booking_detail_id');
    }
    public function search(){
        return $this->belongsTo(FlightSearchDetail::class,'search_master_id', 'search_master_id');
    }
    public function detail(){
        return $this->belongsTo(FlightSearchDetail::class,'trip_id', 'trip_id');

    }
    public function getSearchDetailAttribute(){
        $search = $this->search;
        if($search){

            $detail = $search->data;
            return $detail;
        }else{
            $search = $this->detail;
            return $search->data;
            // return null;
        }
    }
}
