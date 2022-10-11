<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $imageValitionRules = 'image|mimes:jpg,png,jpeg,gif';
        if ($this->isMethod('post')) {
            $imageValitionRules = 'required|' . $imageValitionRules;
        }
        return [
            'name' => 'required|string|max:255|min:3|unique:products,id,'.$this->products?->id,
            'title' => 'required|string|max:255|min:3|unique:products,id,'.$this->products?->id,
            'category' => 'required',
            'price' => 'required|digits_between:1,6',


            'description' => 'required|string',
            'image' => $imageValitionRules


        ];
        //

    }


    public function messages()
    {
        return [
            'name.required' => 'name is required',
            'name.unique' => 'Database check kore dekheci eta ace',
            'name.string' => 'name is required',
            'category.required' => "categoryField is Required",
            'price.required.' => "price requried"
        ];
    }
}
