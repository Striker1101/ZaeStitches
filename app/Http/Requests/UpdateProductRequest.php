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
            'title' => 'sometimes|required|string|unique:products,title,' . $this->product->id,
            'slug' => 'sometimes|required|string|unique:products,slug,' . $this->product->id,
            'description' => 'nullable|string',
            'price' => 'sometimes|required|numeric|min:0',
            'brand_id' => 'sometimes|required|exists:brands,id',
            'weight' => 'nullable|string',
            'featured_image' => 'nullable|image',
            'dimension' => 'nullable|string',
            'material' => 'nullable|string',
            'status' => 'nullable|in:active,inactive,draft',
        ];
    }

}
