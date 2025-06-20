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
            'name_ar.required' => 'Name in Arabic is required',
            'name_ar.string' => 'Name in Arabic must be a string',
            'name_ar.regex' => 'Name in Arabic must contain only Arabic characters',

            'name_en.required' => 'Name in English is required',
            'name_en.string' => 'Name in English must be a string',
            'name_en.regex' => 'Name in English must contain only English characters',

            'description_en.required' => 'Description in English is required',
            'description_en.integer' => 'Description in English must be an integer',
            'description_en.exists' => 'Description in English must exist in the cities table',

            'description_ar.required' => 'Description in Arabic is required',
            'description_ar.integer' => 'Description in Arabic must be an integer',
            'description_ar.exists' => 'Description in Arabic must exist in the cities table',

            'image.image' => 'Image must be an image file',
        ];
    }
}
