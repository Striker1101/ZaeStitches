<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOrderRequest extends FormRequest
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
            'status' => 'in:pending,paid,shipped,completed,cancelled',
            'payment_method' => 'nullable|string',
            'shipping_details' => 'nullable|array',
            'shipping_details.name' => 'sometimes|string',
            'shipping_details.address' => 'sometimes|string',
            'shipping_details.phone' => 'sometimes|string',
        ];
    }
}
