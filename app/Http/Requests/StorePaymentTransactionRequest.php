<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentTransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reference' => 'required|string|unique:payment_transactions',
            'provider' => 'required|string|in:flutterwave,paystack',
            'amount' => 'required|numeric|min:0',
            'currency' => 'required|string|max:10',
            'payable_id' => 'required|integer',
            'payable_type' => 'required|string',
        ];
    }
}
