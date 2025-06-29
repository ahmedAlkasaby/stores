<?php

namespace App\Http\Requests\Api;

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
            'search' => 'nullable|string|max:255',
            'store_type_id' => 'nullable|exists:store_types,id',
            'sort_by' => 'nullable|in:latest,oldest,highest_price,lowest_price',
        ];
    }

    public function messages(): array
    {
        return [
            'search.string' => __('validation.search_string'),
            'store_type_id.exists' => __('validation.store_type_exists'),
            'sort_by.in' => __('validation.sort_by_in'),
        ];
    }
}
