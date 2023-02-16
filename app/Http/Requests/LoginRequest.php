<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        return [
            'email' => 'required|string|email',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => "Votre adresse email est requis",
            'email.email' => "Votre adresse email est incorrect",
            'password.required' => "Votre mot de passe est requis",
        ];
    }
}
