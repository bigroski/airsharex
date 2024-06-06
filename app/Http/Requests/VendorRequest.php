<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
            'name'=>['required', 'string', 'min:3', 'max:150'],
            'type'=>['required', 'string', 'min:3', 'max:50'], 
             'address'=>['required', 'string', 'min:3', 'max:150'],
             'contact_person'=>['required', 'string', 'min:3', 'max:150'],
             'email'=>['required', 'string', 'email', 'min:3', 'max:100'],
             'phone' => [
                'required', 'min:8', 'max:20'
            ],
             'website'=>['required','url', 'min:3', 'max:200'],
        ];
    }
}
