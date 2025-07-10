<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OrderMaxRule implements ValidationRule
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($this->request->max_order > $this->request->amount){
            $fail(__('validation.order_max_smaller_than_amount'));
        }
    }
}
