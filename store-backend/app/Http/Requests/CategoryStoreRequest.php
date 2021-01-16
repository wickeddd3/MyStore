<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|unique:categories,name',
            'slug' => 'required|max:255|unique:categories,slug',
            'parent' => 'exists:categories,id',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Name has maximum of 255 characters only.',
            'name.unique' => 'Name already exist',

            'slug.required' => 'Slug is required',
            'slug.max' => 'Slug has maximum of 255 characters only.',
            'slug.unique' => 'Slug already exist',

            'parent.exists' => 'Category not exist.',
        ];
    }
}
