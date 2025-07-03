<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'search' => 'nullable|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'service_id' => 'nullable|exists:services,id',
            'sort_by' => 'nullable|in:latest,oldest,highest_price,lowest_price',
            'min_price' => 'nullable|numeric|min:0',
            'max_price' => 'nullable|numeric|min:0',
        ];
    }
    public function messages(): array
    {
        return [
            'search.string' => __('validation.search_string'),
            'category_id.exists' => __('validation.category_exists'),
            'service_id.exists' => __('validation.services_exists'),
            'sort_by.in' => __('validation.sort_by_in'),
            'min_price.numeric' => __('validation.min_price_numeric'),
            'max_price.numeric' => __('validation.max_price_numeric'),
        ];
    }
}
