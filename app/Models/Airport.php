<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bigroski\Tukicms\App\Traits\HasListableTrait;

class Airport extends Model
{
    use HasFactory;
    use HasListableTrait;
    
    protected $fillable=[
        'country_id',
        'name',
        'location',
        'IATA_code',
         'ICAO_code',
         'terminal',
         'runway',       
    ];

    protected $casts = [
        'id' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    public $formConfig = [
        'create' => [
            'title' => 'Create Airport',
            'route' => 'web.airports.store',
            'method' => 'post',
            
        ],
        'update' => [
            'title' => 'Edit Airport',
            'route' => 'web.airports.update',
            'method' => 'put',
            
        ],
        
    ];
    public $formFields = [
        'name' => [
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => true,
            'span' => 'col-md-6'
        ],
        'IATA_code' => [
            'label' => 'IATA Code',
            'type' => 'text',
            'placeholder' => 'Enter IATA Code',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'country_id' => [
            'label' => 'Country',
            'type' => 'select',
            'choices' => ['Nepal','India'],
            'placeholder' => 'Select country',
            'required' => true,
            'span' => 'col-6',
        ],
        
        'location' => [
            'label' => 'Location',
            'type' => 'text',
            'placeholder' => 'Enter location',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        
        
        'terminal' => [
            'label' => 'Terminal',
            'type' => 'text',
            'placeholder' => 'Enter Terminal',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'runway' => [
            'label' => 'Runway',
            'type' => 'text',
            'placeholder' => 'Enter runway',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'ICAO_code'=> [
            'label' => 'ICAO Code',
            'type' => 'text',
            'placeholder' => 'Enter ICAO Code',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        
        
    ];

    public $listable = [
        'name' => [
            'label' => 'Name',
            'type' => 'text'
        ],
        'location' => [
            'label' => 'Title',
            'type' => 'text'
        ],
        'IATA_code' => [
            'label' => 'IATA Code',
            'type' => 'text'
        ]
        , 'terminal' => [
            'label' => ' Terminal',
            'type' => 'text'
        ],
        'runway' => [
            'label' => ' Runway',
            'type' => 'text'
        ]
    ];
}
