<?php

namespace App\Http\Requests\Auth\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:2',  'string'],
            'category' => ['required'],
            'is_publish' => ['required'],
            'file' => ['image', 'mimes:jpeg,png,jpg,gif,svg', ],
            'description' => ['required', 'min:10', 'max:5000', 'string'],           
        ];
    }
}
