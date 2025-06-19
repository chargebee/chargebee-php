<?php

namespace Chargebee\Enums;

enum BillingStartOption : string { 
    case IMMEDIATELY = "immediately";
    case ON_SPECIFIC_DATE = "on_specific_date";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>