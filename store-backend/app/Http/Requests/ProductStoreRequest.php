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
            'form.category' => 'required|exists:categories,id',
            'form.brand' => 'required|exists:brands,id',
            'form.sku' => 'required|max:255|unique:products,sku',
            'form.brand' => 'required|max:255',
            'form.name' => 'required|max:255|unique:products,name',
            'form.slug' => 'required|max:255|unique:products,slug',
            'form.price' => 'required|numeric',
            'form.sale_price' => 'required|numeric'
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
            'form.category.required' => 'Category is required',
            'form.category.exists' => 'Category not exist',

            'form.brand.required' => 'Brand is required',
            'form.brand.exists' => 'Brand not exist',

            'form.sku.required' => 'SKU is required.',
            'form.sku.max' => 'SKU has maximum of 255 characters only.',
            'form.sku.unique' => 'SKU already exist.',

            'form.brand.required' => 'Brand is required.',
            'form.brand.max' => 'Brand has maximum of 255 characters only.',

            'form.name.required' => 'Name is required.',
            'form.name.max' => 'Name has maximum of 255 characters only.',
            'form.name.unique' => 'Name already exist.',

            'form.slug.required' => 'Slug is required.',
            'form.slug.max' => 'Slug has maximum of 255 characters only.',
            'form.slug.unique' => 'Slug already exist.',

            'form.price.required' => 'Price is required.',
            'form.price.numeric' => 'Price must be numeric.',

            'form.sale_price.required' => 'Sale Price is required.',
            'form.sale_price.numeric' => 'Sale Price must be numeric.',
        ];
    }
}
