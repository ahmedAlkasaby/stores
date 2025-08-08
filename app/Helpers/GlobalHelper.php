
<?php

if (!function_exists('statusType')) {
    function statusType()
    {
        return [
            1 => __('site.active'),
            0 => __('site.not_active'),
        ];
    }
}
if (!function_exists('filterBoolien')) {
    function filterBoolien()
    {
        return ['all' => __('site.all'), '1' => __('site.yes'), '0' => __('site.no')];
    }
}

if (!function_exists('currencyFormat')) {
    function currencyFormat($amount, $decimals = 2)
    {
        return number_format($amount, $decimals) . ' ' . config('app.currency', 'EGP');
    }
}

if (!function_exists('formatDate')) {
    function formatDate($date, $format = 'Y-m-d H:i')
    {
        return $date ? \Carbon\Carbon::parse($date)->format($format) : null;
    }
}

if (!function_exists('booleanType')) {
    function booleanType()
    {
        return [
            1 => __('site.yes'),
            0 => __('site.no'),
        ];
    }
}
