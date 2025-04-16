<?php

namespace Chargebee\Resources\Addon\Enums;

enum ShippingFrequencyPeriodUnit : string { 
    case YEAR = "year";
    case MONTH = "month";
    case WEEK = "week";
    case DAY = "day";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>