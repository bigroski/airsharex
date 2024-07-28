<?php

namespace App\Http\Requests;

use Bigroski\Tukicms\App\Models\Customer;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class CustomerRrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:250'],
            'phone' => ['required', 'string', 'min:9', 'max:10'],
            'emergency_contact_number' => ['required', 'string', 'min:9', 'max:10'],
            'email'=>['required','email',ValidationRule::unique(Customer::class)],
            'country' => ['required', 'string']  ,  
            'city' => ['required', 'string'] ,         
            'state' => ['required', 'string'] ,
            'address' => ['required', 'string'] ,
            'toc_accepted'=>'required'           
           

        ];
    }
}
