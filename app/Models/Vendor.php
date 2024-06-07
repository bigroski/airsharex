<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bigroski\Tukicms\App\Traits\HasListableTrait;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Vendor extends Model implements HasMedia
{
    use HasFactory;
    use HasListableTrait;
    use InteractsWithMedia;
    public $fillable =   [
   'name',
   'type',
    'country_id',
    'user_id',
    'country_name',
    'city',
    'state',
   'address',
   'address_one',
   'contact_person',
   'phone',
   'email',
   'website',
   'enabled'
];

protected $casts = [
    'id' => 'integer',
    'created_at' => 'timestamp',
    'updated_at' => 'timestamp',
];

    public $formConfig = [
        'create' => [
            'title' => 'Create Vendor',
            'route' => 'web.vendors.store',
            'method' => 'post',
            
        ],
        'update' => [
            'title' => 'Edit Vendor',
            'route' => 'web.vendors.update',
            'method' => 'put',
            
        ],
        'delete' => [
            'title' => 'Delete Vendor',
            'route' => 'web.vendors.delete',
            'method' => 'delete',
            
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
        'type' => [
            'label' => 'Vendor Type',
            'type' => 'text',
            'placeholder' => 'Enter Vendor Type',
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
        
        'address' => [
            'label' => 'Address',
            'type' => 'text',
            'placeholder' => 'Enter location',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        
        
        'contact_person' => [
            'label' => 'contact Person',
            'type' => 'text',
            'placeholder' => 'Enter contact Person',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'phone' => [
            'label' => 'Phone',
            'type' => 'text',
            'placeholder' => 'Enter phone',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'email'=> [
            'label' => 'Email',
            'type' => 'text',
            'placeholder' => 'Enter Email',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'website' => [
            'label' => 'Website',
            'type' => 'text',
            'placeholder' => 'Enter website',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'featured_image' => [
            'label' => 'Logo',
            'type' => 'file',
            'placeholder' => 'Upload Image',
            'required' => true,
            'span' => 'col-md-9'
        ],        
        
    ];

    public $listable = [
        'featured_image' => [
            'label' => 'Featured Image',
            'type' => 'image'
        ],
        'name' => [
            'label' => 'Name',
            'type' => 'text'
        ],
        
        'contact_person' => [
            'label' => 'Contact person',
            'type' => 'text'
        ]
        , 'phone' => [
            'label' => ' Phone',
            'type' => 'text'
        ],
        'email' => [
            'label' => ' Email',
            'type' => 'text'
        ],
        'website' => [
            'label' => ' Website',
            'type' => 'text'
        ]];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getFeaturedImageAttribute(){
        $images = $this->getMedia('featured_image');
        if($images->count() > 0){

            return $images[0]->getFullUrl();
        }
        return '';
    }
}
