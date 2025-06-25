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
}
