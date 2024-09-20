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
       'email',
       'age',
       'flight_booking_detail_id',
       'emergency_contact_number',
       'name'
    ];
    protected $casts = [
        'id' => 'integer',
        'date_of_birth'=>'date',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
    ];

    public $formConfig = [
        'create' => [
            'title' => 'Create Passenger',
            'route' => 'web.passengers.store',
            'method' => 'post',
            
        ],
        'update' => [
            'title' => 'Update Passenger',
            'route' => 'web.passengers.update',
            'method' => 'put',
            
        ],
        'delete' => [
            'title' => 'Delete Passenger',
            'route' => 'web.passengers.delete',
            'method' => 'delete',
            
        ],
        
    ];
    public $formFields = [
        'gender' => [
            'label' => 'Gender',
            'type' => 'select',
            'choices' => ['Male','Female','Other'],
            'placeholder' => 'Select Gender',
            'required' => true,
            'span' => 'col-6',
        ],
        'salutation' => [
            'label' => 'Salutation',
            'type' => 'select',
            'choices' => ['Mr.','Ms.','Mrs.'],
            'placeholder' => 'Select Salutation',
            'required' => true,
            'span' => 'col-6',
        ],
        'first_name' => [
            'label' => 'First Name',
            'type' => 'text',
            'placeholder' => 'Enter first name',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'middle_name' => [
            'label' => 'Middle Name',
            'type' => 'text',
            'placeholder' => 'Enter middle name',
            'required' => false,
            'span' => 'col-md-6' 
        ],
        'last_name' => [
            'label' => 'Last Name',
            'type' => 'text',
            'placeholder' => 'Enter last name',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'phone' => [
            'label' => 'Phone',
            'type' => 'text',
            'placeholder' => 'Enter Phone',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        
        
        'email' => [
            'label' => 'Email',
            'type' => 'text',
            'placeholder' => 'Enter email',
            'required' => true,
            'span' => 'col-md-6' 
        ],
        'date_of_birth'=> [
            'label' => 'Date of birth',
            'type' => 'date',
            'placeholder' => 'Enter Date of birth',
            'required' => true,
            'span' => 'col-md-6' 
        ],
             
    ];

    public $listables = [
        'first_name' => [
            'label' => 'First Name',
            'type' => 'text'
        ],
        'last_name' => [
            'label' => 'last Name',
            'type' => 'text'
        ],
        'phone' => [
            'label' => ' Phone',
            'type' => 'text'
        ],
        'email' => [
            'label' => ' Email',
            'type' => 'text'
        ],
        
        'gender' => [
            'label' => 'Gender',
            'type' => 'text'
        ]             
        
    ];
    public $listable = [
        'first_name' => [
            'label' => 'First Name',
            'type' => 'text'
        ],
        'last_name' => [
            'label' => 'last Name',
            'type' => 'text'
        ],
        'phone' => [
            'label' => ' Phone',
            'type' => 'text'
        ],
        'email' => [
            'label' => ' Email',
            'type' => 'text'
        ],
        
        'gender' => [
            'label' => 'Gender',
            'type' => 'text'
        ]             
                
        
    ];

    public function getListables(){ 
        return $this->listable;
    }

    public function getFriendlySalutationAttribute(){
         $salutation = explode(' - ', $this->salutation);
        $salutationId = $salutation[0];
        $salutationName = $salutation[1];
        return $salutationName;
    }

    public function getFriendlyGenderAttribute(){
        $gender = explode(' - ', $this->gender);
        $genderId = $gender[0];
        $genderName = $gender[1];
        return $genderName;
    }
}
