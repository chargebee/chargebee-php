<?php

namespace Chargebee\Enums;

enum CancelOption : string { 
    case IMMEDIATELY = "immediately";
    case END_OF_TERM = "end_of_term";
    case SPECIFIC_DATE = "specific_date";
    case END_OF_BILLING_TERM = "end_of_billing_term";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>