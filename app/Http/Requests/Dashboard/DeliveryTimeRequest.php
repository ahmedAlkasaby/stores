<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryTimeRequest extends FormRequest
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
            "start_hour" => "required|date_format:H:i",
            "end_hour" => "required|date_format:H:i",
            "order_id" => "nullable|integer",
            "active" => "nullable|boolean",
        ];
    }
    public function messages(): array
    {
        return [
            'start_hour.required' => __("validation.required", ["attribute" => "Start hour"]),
            'end_hour.required' => __("validation.required", ["attribute" => "End hour"]),
            'order_id.required' => __("validation.required", ["attribute" => "Order ID"]),

            'name.ar.required' => __("validation.required", ["attribute" => "Name"]),
            'name.en.required' => __("validation.required", ["attribute" => "Name"]),

        ];
    }
}
