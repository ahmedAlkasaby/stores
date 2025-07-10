<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class ValidServiceCategoriesRule implements ValidationRule
{
   protected $serviceId;

    public function __construct($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $validCategoryIds = DB::table('categories')
            ->where('service_id', $this->serviceId)
            ->pluck('id')
            ->toArray();

        if (!in_array($value, $validCategoryIds)) {
            $fail(__('validation.invalid_category_for_service'));
        }
    }
}
