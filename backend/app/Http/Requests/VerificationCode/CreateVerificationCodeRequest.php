<?php

namespace App\Http\Requests\VerificationCode;

use Illuminate\Foundation\Http\FormRequest;

class CreateVerificationCodeRequest extends FormRequest
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
            'user_id.required'  => ['required', 'string', 'exists:users.id'],
            'code.required'     => ['required', 'string', 'unique'],
            'method.required'   => ['required', 'string'],
        ];
    }
}
