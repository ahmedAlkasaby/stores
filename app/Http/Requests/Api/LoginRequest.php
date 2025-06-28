<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
            'token' => 'required|string',
            'device_type' => 'required|string|in:android,huawei,apple',
            'imei'=>'required|string',
        ];
    }


    public function messages(): array
    {
        return [
            'email.required' => __('validation.required', ['attribute' => __('auth.email')]),
            'email.exists' => __('validation.exists', ['attribute' => __('auth.email')]),
            'password.required' => __('validation.required', ['attribute' => __('auth.password')]),
            'token.required' => __('validation.required', ['attribute' => __('auth.token')]),
            'device_type.required' => __('validation.required', ['attribute' => __('auth.device_type')]),
            'device_type.in' => __('validation.in', ['attribute' => __('auth.device_type')]),
            'imei.required' => __('validation.required', ['attribute' => __('auth.imei')]),
        ];
    }
}
