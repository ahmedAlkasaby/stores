<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            "name.ar" => "required|string|max:255",
            "name.en" => "required|string|max:255",
            "description.ar" => "nullable|string|max:1000",
            "description.en" => "nullable|string|max:1000",
            "image" => "nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048",
            "parent_id" => "nullable|exists:categories,id",
            "service_id" => "nullable|exists:services,id",
            "active" => "nullable|boolean",
            "order_id" => "nullable|integer|min:0",
        ];
    }
    public function messages(): array
    {
        return [
            'name.ar.required' => __('site.name_ar_required'),
            'name.en.required' => __('site.name_en_required'),
            'name.ar.string' => __('site.name_ar_string'),
            'name.en.string' => __('site.name_en_string'),
            'name.ar.max' => __('site.name_ar_max'),
            'name.en.max' => __('site.name_en_max'),
            'description.ar.string' => __('site.description_ar_string'),
            'description.en.string' => __('site.description_en_string'),
            'description.ar.max' => __('site.description_ar_max'),
            'description.en.max' => __('site.description_en_max'),
            'image.image' => __('site.image_image'),
            'image.mimes' => __('site.image_mimes'),
            'image.max' => __('site.image_max'),
            'parent_id.exists' => __('site.parent_id_exists'),
            'active.boolean' => __('site.active_boolean'),
            'order_id.integer' => __('site.order_id_integer'),
            'order_id.min' => __('site.order_id_min'),

        ];
    }
    protected function prepareForValidation()
    {
        if ($this->has('parent_id') && $this->parent_id === 'null') {
            $this->merge([
                'parent_id' => null,
            ]);
        }
    }
}
