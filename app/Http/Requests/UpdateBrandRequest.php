<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
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
        $id = $this->route('brand')->id ?? null;

        return [
            'name' => 'sometimes|required|string|unique:brands,name,' . $id,
            'slug' => 'sometimes|nullable|string|unique:brands,slug,' . $id,
            'description' => 'nullable|string',
            'logo' => 'nullable|url',
        ];
    }
}
