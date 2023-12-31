<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReseauRequest extends FormRequest
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
            'libelle' => 'required',
            'lan' => 'required',
            'is_disponible' => 'required',
        ];
    }
}
