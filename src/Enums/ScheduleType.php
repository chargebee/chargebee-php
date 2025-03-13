<?php

namespace Chargebee\Enums;

enum ScheduleType : string { 
    case IMMEDIATE = "immediate";
    case SPECIFIC_DATES = "specific_dates";
    case FIXED_INTERVALS = "fixed_intervals";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>