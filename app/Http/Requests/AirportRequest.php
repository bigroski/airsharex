<?php

namespace App\Http\Requests;

use App\Models\Airport;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AirportRequest extends FormRequest
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
        $airportId = $this->route('airport');

        return [
            'name' => ['required', 'string', 'min:3', 'max:150'],
            'IATA_code' => ['required', 'string', 'min:3', 'max:5',Rule::unique(Airport::class)->ignore($airportId)],
            'ICAO_code' => ['required', 'string', 'min:4', 'max:5',Rule::unique(Airport::class)->ignore($airportId)],
            'country_id'=>['required'],
            'terminal' => ['required', 'string']            
        ];
    }
}
