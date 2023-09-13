<?php

namespace App\Http\Requests\Connict;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreSchoolRequest extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'background_image' => 'nullable',
            'contact_number' => 'nullable',
            'logo' => [
                'required',
                File::image()
            ]
        ];
    }

    public function messages()
    {
        return [
            'logo.mimes' => 'This field only accepts an image.'
        ];
    }
}