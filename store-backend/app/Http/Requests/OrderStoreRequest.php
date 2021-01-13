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
            'form.order_no' => 'required|unique:orders,order_no',
            'form.user_id' => 'required|exists:users,id',
            'form.status' => 'required',
            'form.item_count' => 'required|numeric',
            'form.grand_total' => 'required',
            'form.is_paid' => 'required',
            'form.payment_method' => 'required',
            'form.shipping_fullname' => 'required',
            'form.shipping_phone' => 'required',
            'form.shipping_address' => 'required',
            'form.shipping_barangay' => 'required',
            'form.shipping_city' => 'required',
            'form.shipping_province' => 'required',
            'form.shipping_country' => 'required',
            'form.billing_fullname' => 'required',
            'form.billing_phone' => 'required',
            'form.billing_address' => 'required',
            'form.billing_barangay' => 'required',
            'form.billing_city' => 'required',
            'form.billing_province' => 'required',
            'form.billing_country' => 'required',
        ];
    }
}
