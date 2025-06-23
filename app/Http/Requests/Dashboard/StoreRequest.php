<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "address" => "nullable|string|max:1000",
            "image" => "nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048",
            "store_type_id" => "nullable|exists:store_types,id",
            "active" => "nullable|boolean",
            "order_id" => "nullable|integer|min:0",
        ];
    }
    public function messages(): array
    {
        return [
            'name_ar.required' => __("validation.name_ar_required"),
            'name_ar.string' => __("validation.name_ar_string"),
            'name_en.required' => __("validation.name_en_required"),
            'name_en.string' => __("validation.name_en_string"),
            'description_ar.string' => __("validation.description_ar_string"),
            'description_en.string' => __("validation.description_en_string"),
            'address.string' => __("validation.address_string"),
            'image.image' => __("validation.image_image"),
            'store_type_id.exists' => __("validation.store_type_id_exists"),
            'active.boolean' => __("validation.active_boolean"),
            'order_id.integer' => __("validation.order_id_integer"),
            'order_id.min' => __("validation.order_id_min"),
            'order_id.required' => __("validation.order_id_required"),
            'order_id.max' => __("validation.order_id_max"),
            
        ];
    }
}
