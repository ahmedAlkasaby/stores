<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            "rate" => "required|integer|min:1|max:5",
            "comment" => "required|string",
            "active" => "required|boolean",
        ];
    }
    public function message()
    {
        return [
            'product_id.required' => __("validation.product_id_required"),
            'product_id.exists' => __("validation.product_id_exists"),
            'user_id.required' => __("validation.user_id_required"),
            'user_id.exists' => __("validation.user_id_exists"),
            'rate.required' => __("validation.rate_required"),
            'rate.integer' => __("validation.rate_integer"),
            'rate.min' => __("validation.rate_min"),
            'rate.max' => __("validation.rate_max"),
            'comment.required' => __("validation.comment_required"),
            'comment.string' => __("validation.comment_string"),
            'active.required' => __("validation.active_required"),
            'active.boolean' => __("validation.active_boolean"),
        ];
    }
}
