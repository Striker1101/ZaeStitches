<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title' => 'required|string|unique:products,title',
            'slug' => 'required|string|unique:products,slug',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'brand_id' => 'required|exists:brands,id',
            'weight' => 'nullable|string',
            'featured_image' => 'nullable|image',
            'dimension' => 'nullable|string',
            'material' => 'nullable|string',
            'status' => 'nullable|in:active,inactive,draft',
        ];
    }

}
