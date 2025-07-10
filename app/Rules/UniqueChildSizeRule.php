<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueChildSizeRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_array($value)) {
            return;
        }

        $sizeIds = array_column($value, 'size_id');

        if (count($sizeIds) !== count(array_unique($sizeIds))) {
            $fail(__('validation.duplicate_child_size'));
        }
    }
}
