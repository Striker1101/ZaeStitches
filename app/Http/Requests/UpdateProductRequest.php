<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow request authorization
    }

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
        $productId = $this->route('product')->id ?? null;

        return [
            'title' => "sometimes|string|unique:products,title,$productId",
            'slug' => "sometimes|string|unique:products,slug,$productId",
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'brand_id' => 'required|exists:brands,id',
            'weight' => 'nullable|string',
            'dimension' => 'nullable|string',
            'material' => 'nullable|string',
            'status' => 'required|in:active,inactive,draft',
            'is_popular' => 'nullable|in:0,1',
            'is_latest' => 'nullable|in:0,1',
            'is_available' => 'nullable|in:0,1',
            'rating' => 'nullable|numeric|min:0|max:5',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'featured_image' => 'nullable|image|max:2048',
            'media.*' => 'file|max:20480',
        ];
    }
}
