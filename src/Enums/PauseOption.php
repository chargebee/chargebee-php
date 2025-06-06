<?php

namespace Chargebee\Enums;

enum PauseOption : string { 
    case IMMEDIATELY = "immediately";
    case END_OF_TERM = "end_of_term";
    case SPECIFIC_DATE = "specific_date";
    case BILLING_CYCLES = "billing_cycles";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>