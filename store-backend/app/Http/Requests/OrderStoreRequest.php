<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
            'order_no' => 'required|unique:orders,order_no',
            'user_id' => 'required|exists:users,id',
            'status' => 'required',
            'item_count' => 'required|numeric',
            'grand_total' => 'required',
            'is_paid' => 'required',
            'payment_method' => 'required',
            'shipping_fullname' => 'required',
            'shipping_phone' => 'required',
            'shipping_address' => 'required',
            'shipping_barangay' => 'required',
            'shipping_city' => 'required',
            'shipping_province' => 'required',
            'shipping_country' => 'required',
            'billing_fullname' => 'required',
            'billing_phone' => 'required',
            'billing_address' => 'required',
            'billing_barangay' => 'required',
            'billing_city' => 'required',
            'billing_province' => 'required',
            'billing_country' => 'required',
        ];
    }
}
