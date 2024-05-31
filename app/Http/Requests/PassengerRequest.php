<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassengerRequest extends FormRequest
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
            'gender' => [
                'required'
            ],
            'salutation' => [
                'required'
            ],
            'first_name' => [
                'required', 'string', 'min:3', 'max:50'
            ],
            'middle_name' => [
                'string', 'min:3', 'max:50'
            ],
            'last_name' => [
                'required', 'string', 'min:3', 'max:50'
            ],
            'phone' => [
                'required', 'min:8', 'max:20'
            ],

            'email' => [
                'required', 'string', 'email', 'min:3', 'max:100'
            ],
            'date_of_birth' => [
                'required'
            ],
        ];
    }
}
