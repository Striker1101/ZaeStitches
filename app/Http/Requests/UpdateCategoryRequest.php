<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
            'name' => 'sometimes|required|string|unique:categories,name,' . $this->category->id,
            'slug' => 'sometimes|required|string|unique:categories,slug,' . $this->category->id,
            'description' => 'nullable|string',
            'type' => 'in:both,product,blog',
        ];
    }
}
