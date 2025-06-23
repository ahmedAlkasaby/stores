<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
            'name_ar' => 'required|string',
            'name_en' => 'required|string',
            'description_en' => 'required|string',
            'description_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
     public function messages(){
        return [
            'name_ar.required' => __("validation.name_ar_required"),
            'name_ar.string' => __("validation.name_ar_string"),
            // 'name_ar.regex' => 'Name in Arabic must contain only Arabic characters',

            'name_en.required' => __("validation.name_en_required"),
            'name_en.string' => __("validation.name_en_string"),
            // 'name_en.regex' => 'Name in English must contain only English characters',

            'description_en.required' => __("validation.description_en_required"),
            'description_en.string' => __("validation.description_en_string"),

            'description_ar.required' => __("validation.description_ar_required"),
            'description_ar.string' => __("validation.description_ar_string"),
            
            'image.image' => __("validation.image_image"),
        ];
    }
}
