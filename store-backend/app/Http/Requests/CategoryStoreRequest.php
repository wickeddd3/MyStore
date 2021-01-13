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
            'form.name' => 'required|max:255|unique:categories,name',
            'form.slug' => 'required|max:255|unique:categories,slug',
            'form.parent' => 'required|exists:categories,id',
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
            'form.name.required' => 'Name is required',
            'form.name.max' => 'Name has maximum of 255 characters only.',
            'form.name.unique' => 'Name already exist',

            'form.slug.required' => 'Slug is required',
            'form.slug.max' => 'Slug has maximum of 255 characters only.',
            'form.slug.unique' => 'Slug already exist',

            'form.parent.required' => 'Parent Category is required',
            'form.parent.exists' => 'Category not exist.',
        ];
    }
}
