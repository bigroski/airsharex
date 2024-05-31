<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bigroski\Tukicms\App\Traits\HasListableTrait;

class Testimonial extends Model
{
    use HasFactory;
    use HasListableTrait;

    public $fillables =[
    'airport_id',
    'rating',
    'description',
    'testifier_name',
    'testifier_email',
    'testifier_location'
    ];
    protected $casts = [
        'id' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    public $formConfig = [
        'create' => [
            'title' => 'Create Testimonial',
            'route' => 'web.testimonials.store',
            'method' => 'post',
            
        ],
        'update' => [
            'title' => 'Edit Testimonial',
            'route' => 'web.testimonials.update',
            'method' => 'put',
            
        ],
        'delete' => [
            'title' => 'Delete Testimonial',
            'route' => 'web.testimonials.delete',
            'method' => 'delete',
            
        ],
        
    ];
    public $formFields = [
        'rating' => [
            'label' => 'Rating',
            'type' => 'select',
            'choices' => ['1','2','3','4','5'],
            'placeholder' => 'Select rating',
            'required' => true,
            'span' => 'col-6',
        ],
        'description' => [
            'label' => 'Description',
            'type' => 'text',
            'placeholder' => 'Enter Description',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'airport_id' => [
            'label' => 'Airport',
            'type' => 'select',
            'choices' => ['TIA','GBA'],
            'placeholder' => 'Select airport',
            'required' => true,
            'span' => 'col-6',
        ],
        
        'testifier_name' => [
            'label' => 'Name',
            'type' => 'text',
            'placeholder' => 'Enter Name',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        
        
        'testifier_email' => [
            'label' => 'Email',
            'type' => 'text',
            'placeholder' => 'Enter email',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'testifier_location' => [
            'label' => 'Location',
            'type' => 'text',
            'placeholder' => 'Enter location',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        
        
    ];

    public $listable = [
        'testifier_name' => [
            'label' => 'Name',
            'type' => 'text'
        ],
        'testifier_email' => [
            'label' => ' Email',
            'type' => 'text'
        ],
        
        'description' => [
            'label' => 'Description',
            'type' => 'text'
        ]
        , 'rating' => [
            'label' => ' Rating',
            'type' => 'text'
        ],
        
        
    ];

}
