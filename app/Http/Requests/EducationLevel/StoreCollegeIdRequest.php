<?php

namespace App\Http\Requests\EducationLevel;

use Illuminate\Foundation\Http\FormRequest;

class StoreCollegeIdRequest extends FormRequest
{
    protected $errorBag = 'storeCollegeID';
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
            'education_id' => 'required',
            'role_id' => 'required',
            'first_name' => 'required|min:2|max:100',
            'middle_name' => 'nullable|min:2|max:100',
            'last_name' => 'required|min:2|max:100',
            'suffix' => 'nullable',
            'birth_date' => 'nullable|date',
            'course' => 'required',
            'school_year' => 'required|digits:4|integer|min:1950|max:' . (date('Y') + 1),
            'level' => 'required',
            'section' => 'required',
            'school_id_number' => 'required',
            'guardian_full_name' => 'required',
            'guardian_contact_number' => 'nullable',
            'guardian_complete_address' => 'required'
        ];
    }
}