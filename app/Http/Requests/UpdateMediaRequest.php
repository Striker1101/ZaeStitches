<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMediaRequest extends FormRequest
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
            //
            'name' => 'sometimes|required|string',
            'url' => 'sometimes|required|url',
            'type' => 'sometimes|required|in:blog,product,both',
            'mime_type' => 'nullable|string',
            'size' => 'nullable|string',
            'extension' => 'nullable|string',
        ];
    }
}
