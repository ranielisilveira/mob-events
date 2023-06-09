<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateParcitipantsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'cpf' => ['required', 'string', 'size:11', 'regex:/^\d{11}$/'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'cpf.required' => 'CPF is required',
            'cpf.size' => 'CPF must have 11 characters',
            'cpf.regex' => 'CPF must be numeric',
        ];
    }
}
