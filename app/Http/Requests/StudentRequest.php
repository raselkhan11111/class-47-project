<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|unique:students|max:255|min:3',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'hobby' => 'required',
            'nationality' => 'required',
        ];
        if ($this->getmethod() =="POST") {
            # code...
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Name Field is required',
            'name.unique' => 'This Name Already Used',
            'date_of_birth.required' => 'Dath Of Birth Field is required',
            'hobby.required' => 'hobby Field is required',
            'gender.required' => 'Gender Field is required',
            'nationality.required' => 'nationality Field is required',
        ];
    }
}
