<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrdinateurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'num_serie' => 'required',
            'modele' => 'required',
            'marque' => 'required|email',
            'date_service' => 'required',
            'reseau' => 'required',
        ];
    }
}
nn
