<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OfferRule implements ValidationRule
{
    protected $request;
    public function __construct($request)
    {
        $this->request = $request;
    }



    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if($this->request->boolean('offer')){
            $offerFields=array_filter([
                'offer_price'=>$this->request->offer_price,
                'offer_amount'=>$this->request->offer_amount,
                'offer_percent'=>$this->request->offer_percent,
            ]);
            if(count($offerFields)==0){
                $fail(__('validation.you_must_select_an_offer'));
            }
            if(count($offerFields)>1){
                $fail(__('validation.you_must_select_one_offer'));
            }
        }
    }
}
