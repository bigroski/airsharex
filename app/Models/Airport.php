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
            'route' => 'web.airport.store',
            'method' => 'post',
            
        ],
        'update' => [
            'title' => 'Edit Airport',
            'route' => 'web.airport.update',
            'method' => 'put',
            
        ],
        
    ];
    public $formFields = [
        'title' => [
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter name',
            'required' => true,
            'span' => 'col-md-2'
        ],
        'country_id' => [
            'label' => 'Country',
            'type' => 'select',
            'choices' => ['Nepal','India'],
            'placeholder' => 'Select country',
            'required' => true,
            'span' => 'col-8',
        ],
        
        'location' => [
            'label' => 'Locationn',
            'type' => 'text',
            'placeholder' => 'Enter location',
            'required' => true,
            'span' => 'col-md-12' 
        ],
        'IATA_code' => [
            'label' => 'IATA Code',
            'type' => 'text',
            'placeholder' => 'Enter IATA Code',
            'required' => true,
            'span' => 'col-md-12' 
        ],
        'termanal' => [
            'label' => 'Terminal',
            'type' => 'text',
            'placeholder' => 'Enter Terminal',
            'required' => true,
            'span' => 'col-md-12' 
        ],
        'runway' => [
            'label' => 'Runway',
            'type' => 'text',
            'placeholder' => 'Enter runway',
            'required' => true,
            'span' => 'col-md-12' 
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
