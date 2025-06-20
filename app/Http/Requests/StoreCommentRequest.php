<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'content' => 'required|string|min:3',
            'commentable_id' => 'required|integer',
            'commentable_type' => 'required|string|in:App\Models\Blog,App\Models\Product',
            'parent_id'=> 'sometimes|string',
            'type'=> 'sometimes|string'
        ];
    }
}
