<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
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
            'siret' =>['required', 'integer'],
            'history' => ['required', 'string'],
            'craftingDescription' =>['required', 'string'],
            'speciality_id'=>['required', 'integer'],
            'user_id'=>['required', 'uuid'],
            'theme_id'=>['required', 'uuid'],
        ];
    }
}
