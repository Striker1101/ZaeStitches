<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencyRequest extends FormRequest
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
            //
            'code' => 'required|string|unique:currencies,code',
            'name' => 'sometimes|string',
            'symbol' => 'sometimes|string',
            'flag' => 'sometimes|string',
            'rate_to_naira' => 'sometimes|numeric|min:0.01',
            'country_code' => 'sometimes|string|size:3',
            'shipping_amount' => 'sometimes|numeric|min:0.01',
        ];
    }
}
