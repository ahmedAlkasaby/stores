<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\FreeShippingRule;
use App\Rules\OfferRule;
use App\Rules\OrderMaxRule;
use App\Rules\ValidServiceCategoriesRule;
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
        $productId = optional($this->product)->id;

        return [
            'code' => [
                'required',
                'string',
                'max:255',
                'unique:products,code' . ($productId ? ',' . $productId : ''),
            ],

            'image' => [
                $productId ? 'nullable' : 'required',
                'image',
                'mimes:jpg,jpeg,png',
                'max:5000',
            ],

            "name.ar" => "required|string|max:255",
            "name.en" => "required|string|max:255",
            "description.ar" => "nullable|string|max:1000",
            "description.en" => "nullable|string|max:1000",


            'price' => ['required', 'numeric', 'gt:1'],

            'offer' => ['required', 'boolean',new OfferRule($this)],
            'offer_percent' => ['nullable', 'numeric', 'min:1'],
            'offer_amount' => ['nullable', 'numeric', 'min:1','max:99'],
            'price_offer' => ['nullable', 'numeric', 'min:1'],

            'free_shipping' => ['required', 'boolean',new FreeShippingRule($this)],
            'shipping_cost' => ['nullable', 'numeric', 'min:0'],

            'amount' => ['required', 'numeric', 'min:1'],
            'order_max' => ['required', 'numeric', 'min:1',new OrderMaxRule($this)],

            'date_start'=>'nullable|date',
            'date_end'=>'nullable|date|after:date_start',

            'service_id'=>'required|exists:services,id',
            'unit_id'=>'required|exists:units,id',
            'brand_id'=>'nullable|exists:brands,id',
            'size_id'=>'nullable|exists:sizes,id',

            'categories' => ['required', 'array'],
            'categories.*' => ['required', 'integer', new ValidServiceCategoriesRule($this->input('service_id'))],

            'order_id'=>'nullable|integer|min:1',

        ];
    }


    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->has('children') && is_array($this->children)) {
                foreach ($this->children as $index => $child) {
                    $offer = filter_var($child['offer'] ?? false, FILTER_VALIDATE_BOOLEAN);
                    $hasPercent = !empty($child['offer_percent']);
                    $hasAmount = !empty($child['offer_amount']);
                    $hasPrice = !empty($child['offer_price']);

                    $filled = array_filter([$hasPercent, $hasAmount, $hasPrice]);

                    if ($offer) {
                        if (count($filled) === 0) {
                            $validator->errors()->add("children.$index.offer", __('validation.you_must_select_an_offer'));
                        } elseif (count($filled) > 1) {
                            $validator->errors()->add("children.$index.offer", __('validation.you_must_select_one_offer'));
                        }
                    }
                }
            }
        });
    }


    public function messages()
    {
        return
        [
            "name.ar.required" => __("validation.required", ["attribute" => __("site.name")]),
            "name.en.required" => __("validation.required", ["attribute" => __("site.name")]),
            "name.ar.string" => __("validation.string", ["attribute" =>  __("site.name")]),
            "name.en.string" => __("validation.string", ["attribute" =>  __("site.name")]),
            "name.ar.max" => __("validation.max.string", ["attribute" =>  __("site.name"), "max" => 255]),
            "name.en.max" => __("validation.max.string", ["attribute" =>  __("site.name"), "max" => 255]),

        ];
    }
}
