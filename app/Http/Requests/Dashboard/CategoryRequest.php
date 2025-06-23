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
            "name_ar" => "required|string|max:255",
            "name_en" => "required|string|max:255",
            "description_ar" => "nullable|string|max:1000",
            "description_en" => "nullable|string|max:1000",
            "image" => "nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048",
            "parent_id" => "nullable|exists:categories,id",
            "store_id" => "nullable|exists:stores,id",
            "active" => "nullable|boolean",
            "order_id" => "nullable|integer|min:0",
        ];
    }
    public function messages(): array
    {
        return [
            'name_ar.required' => __('site.name_ar_required'),
            'name_en.required' => __('site.name_en_required'),
            'name_ar.string' => __('site.name_ar_string'),
            'name_en.string' => __('site.name_en_string'),
            'name_ar.max' => __('site.name_ar_max'),
            'name_en.max' => __('site.name_en_max'),
            'description_ar.string' => __('site.description_ar_string'),
            'description_en.string' => __('site.description_en_string'),
            'description_ar.max' => __('site.description_ar_max'),
            'description_en.max' => __('site.description_en_max'),
            'image.image' => __('site.image_image'),
            'image.mimes' => __('site.image_mimes'),
            'image.max' => __('site.image_max'),
            'parent_id.exists' => __('site.parent_id_exists'),
            'store_id.exists' => __('site.store_id_exists'),
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
