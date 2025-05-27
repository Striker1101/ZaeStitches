<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTagRequest extends FormRequest
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
            'name' => 'sometimes|required|string|unique:tags,name,' . $this->tag->id,
            'slug' => 'sometimes|required|string|unique:tags,slug,' . $this->tag->id,
            'type' => 'sometimes|required|in:product,blog,both',
        ];
    }
}
