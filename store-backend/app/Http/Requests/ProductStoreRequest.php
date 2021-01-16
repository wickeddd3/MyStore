<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'category' => 'required|exists:categories,id',
            'brand' => 'required|exists:brands,id',
            'sku' => 'required|max:255|unique:products,sku',
            'brand' => 'required|max:255',
            'name' => 'required|max:255|unique:products,name',
            'slug' => 'required|max:255|unique:products,slug',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric'
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
            'category.required' => 'Category is required',
            'category.exists' => 'Category not exist',

            'brand.required' => 'Brand is required',
            'brand.exists' => 'Brand not exist',

            'sku.required' => 'SKU is required.',
            'sku.max' => 'SKU has maximum of 255 characters only.',
            'sku.unique' => 'SKU already exist.',

            'brand.required' => 'Brand is required.',
            'brand.max' => 'Brand has maximum of 255 characters only.',

            'name.required' => 'Name is required.',
            'name.max' => 'Name has maximum of 255 characters only.',
            'name.unique' => 'Name already exist.',

            'slug.required' => 'Slug is required.',
            'slug.max' => 'Slug has maximum of 255 characters only.',
            'slug.unique' => 'Slug already exist.',

            'price.required' => 'Price is required.',
            'price.numeric' => 'Price must be numeric.',

            'sale_price.required' => 'Sale Price is required.',
            'sale_price.numeric' => 'Sale Price must be numeric.',
        ];
    }
}
