<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class FreeShippingRule implements ValidationRule
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $freeShipping = $this->request->boolean('free_shipping');
        $shippingCost = $this->request->shipping_cost;

        if ($freeShipping) {
            if ($shippingCost > 0) {
                $fail(__('validation.shipping_cost_must_be_zero'));
            }
        } else {
            if (!$this->request->filled('shipping_cost') || $shippingCost <= 0) {
                $fail(__('validation.shipping_cost_required'));
            }
        }
    }
}
