<?php

namespace Chargebee\Enums;

enum FreePeriodUnit : string { 
    case DAY = "day";
    case WEEK = "week";
    case MONTH = "month";
    case YEAR = "year";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>