<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'title' => 'sometimes|required|string|unique:blogs,title,' . $this->blog->id,
            'slug' => 'sometimes|required|string|unique:blogs,slug,' . $this->blog->id,
            'content' => 'sometimes|required|string',
            'duration' => 'nullable|integer|min:1',
            'featured_image' => 'nullable|image',
            'status' => 'sometimes|required|in:draft,published',
            'user_id' => 'sometimes|required|exists:users,id',

        ];
    }
}
