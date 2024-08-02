<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingOnDemandRequest extends FormRequest
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
            'arrival_date' => ['required','date'],
            'return_date' => ['required','date'],
            'booking_name' => ['required', 'min:3', 'max:150'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'contact_number' => ['required', 'numeric'],
            'destination_from' => ['required'],
            'destination_to' => ['required'],
            'adult_passanger' => ['required', 'min:1'],
            'pickup_location' => ['required'],
            'booking_notes' => ['required']
        ];
    }
}
