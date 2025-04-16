<?php

namespace Chargebee\Resources\PaymentScheduleScheme\Enums;

enum PeriodUnit : string { 
    case DAY = "day";
    case WEEK = "week";
    case MONTH = "month";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>