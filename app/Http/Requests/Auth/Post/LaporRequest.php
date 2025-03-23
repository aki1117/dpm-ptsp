<?php

namespace App\Http\Requests\Auth\Post;

use Illuminate\Foundation\Http\FormRequest;

class LaporRequest extends FormRequest
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
            'email' => ['required','email'],
            'ktp' => ['required', 'max:17'],
            'phone_number'=> ['required', 'max:12'],
            'jenis_Lapor_id'=> ['required'],          
        ];
    }

    public function messages(): array
{
    return [
        'ktp.max' => 'Nomor KTP tidak boleh melebihi 17 digit',
        'phone_number.max' => 'Nomor telepon tidak boleh melebihi 12 digit',
    ];
}
}
