<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;

    protected $fillable=[
       'first_name',
       'middle_name',
       'last_name',
       'gender',
    'date_of_birth',
       'salutation',
       'phone',
       'email'
    ];
    protected $casts = [
        'id' => 'integer',
        'date_of_birth'=>'date',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];
}
