<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'nullable|exists:users,id',
            'order_number' => 'required|string|unique:orders,order_number',
            'status' => 'in:pending,paid,shipped,completed,cancelled',
            'total_amount' => 'required|numeric|min:0',
            'payment_method' => 'nullable|string',
            'shipping_details' => 'required|array',
            'shipping_details.name' => 'required|string',
            'shipping_details.address' => 'required|string',
            'shipping_details.phone' => 'required|string',
        ];
    }
}
