<?php

namespace Chargebee\Enums;

enum EndScheduleOn : string { 
    case AFTER_NUMBER_OF_INTERVALS = "after_number_of_intervals";
    case SPECIFIC_DATE = "specific_date";
    case SUBSCRIPTION_END = "subscription_end";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>