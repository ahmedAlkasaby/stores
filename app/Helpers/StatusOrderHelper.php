<?php
use App\Enums\StatusOrderEnum;

class StatusOrderHelper
{
    public static function transitions(): array
    {
        return [
            StatusOrderEnum::Request => StatusOrderEnum::cases(),

            StatusOrderEnum::Pending => StatusOrderEnum::except([
                StatusOrderEnum::Request
            ]),

            StatusOrderEnum::Approved => StatusOrderEnum::except([
                StatusOrderEnum::Request
            ]),

            StatusOrderEnum::Preparing => StatusOrderEnum::except([
                StatusOrderEnum::Request,
                StatusOrderEnum::Pending,
                StatusOrderEnum::Approved
            ]),

            StatusOrderEnum::PreparingFinished => StatusOrderEnum::except([
                StatusOrderEnum::Request,
                StatusOrderEnum::Pending,
                StatusOrderEnum::Approved,
                StatusOrderEnum::Preparing
            ]),

            StatusOrderEnum::DeliveryGo => StatusOrderEnum::except([
                StatusOrderEnum::Request,
                StatusOrderEnum::Pending,
                StatusOrderEnum::Approved,
                StatusOrderEnum::Preparing,
                StatusOrderEnum::PreparingFinished
            ]),

            StatusOrderEnum::Delivered => [],

            StatusOrderEnum::Canceled => StatusOrderEnum::only([
                StatusOrderEnum::Canceled,
                StatusOrderEnum::Returned,
                StatusOrderEnum::Rejected
            ]),

            StatusOrderEnum::Returned => StatusOrderEnum::only([
                StatusOrderEnum::Canceled,
                StatusOrderEnum::Returned,
                StatusOrderEnum::Rejected
            ]),

            StatusOrderEnum::Rejected => StatusOrderEnum::only([
                StatusOrderEnum::Canceled,
                StatusOrderEnum::Returned,
                StatusOrderEnum::Rejected
            ]),
        ];
    }

    public static function getAvailableTransitions(StatusOrderEnum $status): array
    {
        return self::transitions()[$status] ?? [];
    }

    public static function canTransition(StatusOrderEnum $from, StatusOrderEnum $to): bool
    {
        return in_array($to, self::getAvailableTransitions($from));
    }

    public static function allStatuses(): array
    {
        return StatusOrderEnum::cases();
    }

    public static function isFinal(StatusOrderEnum $status): bool
    {
        return empty(self::getAvailableTransitions($status));
    }
}

