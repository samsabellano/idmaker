<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['required'],
            'password' => ['required'],
        ];
    }

    // Custom field validation message (You can use the default validation message as well.)
    public function messages()
    {
        return [
            'username.required' => 'Please enter your username.',
            'password.required' => 'Please enter your password.'
        ];
    }
}