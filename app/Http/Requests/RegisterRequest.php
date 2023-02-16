<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' => 'required|string|min:3',
            'lastname' => 'nullable|string|min:3',
            'parish_official' => 'nullable|boolean',
            'user_type' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
        ];
    }

    public function messages()
    {
        return [
            'username.required' => "Votre nom est requis",
            'username.min' => "Votre nom est trop court",
            'lastname.min' => "Votre prénom est trop court",
            'user_type.required' => "Le type d'utilisateur est requis",
            'email.required' => "L'adresse email est requis",
            'email.email' => "L'adresse email est incorrect",
            'email.unique' => "Cette adresse email est déja utilisée",
            'password.required' => "Le mot de passe est requis",
            'password.min' => "Le mot de passe avoir au min 8 caractères",
            'password.regex' => "Le mot de passe doit contenir des minuscules, majuscules, chiffres et caractères spéciaux",
        ];
    }
}
