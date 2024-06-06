<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TetimonialRequest extends FormRequest
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
            'airport_id' => ['required'],
            'rating' => ['required'],
            'description' => ['required', 'string', 'min:3', 'max:500'],
            'testifier_name' => ['required', 'string', 'min:3', 'max:150'],
            'testifier_email' => ['required', 'string', 'email', 'min:3', 'max:100'],
            'testifier_location' => ['required', 'string', 'min:3', 'max:150']
        ];
    }
}
