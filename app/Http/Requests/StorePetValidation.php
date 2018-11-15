<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePetValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required|string|max:255',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'death_date' => 'required|date',
            'discharge_date' => 'required|date',
            'observation' => 'nullable',
            'species_id'  => 'numeric'
        ];
    }
}
