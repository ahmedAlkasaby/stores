<?php

namespace App\Http\Requests\Api;

use App\Helpers\PageHelper;
use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        $types = implode(',', array_keys(PageHelper::getPagesTypes()));

        return [
            'type' => 'nullable|string|in:' . $types,
        ];
    }
}
