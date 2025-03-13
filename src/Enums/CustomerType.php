<?php

namespace Chargebee\Enums;

enum CustomerType : string { 
    case RESIDENTIAL = "residential";
    case BUSINESS = "business";
    case SENIOR_CITIZEN = "senior_citizen";
    case INDUSTRIAL = "industrial";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>