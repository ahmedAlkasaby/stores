<?php

namespace App\Http\Requests\Api;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreCartItemsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {

        return [
            'product_id' => ['required', 'exists:products,id'],
            'qty' => [
                'required',
                'integer',
                'min:1',
               
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'product_id.required' => __('validation.product_required'),
            'product_id.exists'   => __('validation.product_exists'),
            'qty.required' => __('validation.qty_required'),
            'qty.integer' => __('validation.qty_integer'),
            'qty.min' => __('validation.qty_min'),

        ];
    }

}
