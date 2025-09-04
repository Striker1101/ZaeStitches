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
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'is_popular' => $this->has('is_popular') ? 1 : 0,
            'is_latest' => $this->has('is_latest') ? 1 : 0,
            'is_available' => $this->has('is_available') ? 1 : 0,
        ]);
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
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'brand_id' => 'required|exists:brands,id',
            'discount_price' => 'required|numeric|min:0',
            'weight' => 'required|string',
            'dimension' => 'required|string',
            'material' => 'required|string',
            'status' => 'nullable|in:active,inactive,draft',
            'is_popular' => 'nullable|in:0,1',
            'is_latest' => 'nullable|in:0,1',
            'is_available' => 'nullable|in:0,1',
            'rating' => 'required|numeric|min:0|max:5',
            'categories' => 'nullable|array',
            'hs_code' => 'nullable|string|max:255',
            'categories.*' => 'exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'featured_image' => 'required|image|max:2048',
            'media.*' => 'file|max:20480',
        ];
    }
}
