<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SizeRequest extends FormRequest
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
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description_en' => 'nullable|string|max:1000',
            'description_ar' => 'nullable|string|max:1000',
            'active' => 'boolean',
            'order_id' => 'nullable|integer',
        ];
    }
    public function messages(): array
    {
        return [
            'name_ar.required' => __('validation.name_ar_required'),
            'name_en.required' => __('validation.name_en_required'),
            'description_en.max' => __('validation.description_en_max', ['max' => 1000]),
            'description_ar.max' => __('validation.description_ar_max', ['max' => 1000]),
            'active.boolean' => __('validation.active_boolean'),
            'order_id.exists' => __('validation.order_id_required'),
        ];
    }
}
