<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlightBookigRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:150'],
            'trip_id' => ['required', 'string'],
            'email' => ['required', 'string', 'min:4', 'max:50','email'],
            'phone' => ['required']      
        ];
    }
}
