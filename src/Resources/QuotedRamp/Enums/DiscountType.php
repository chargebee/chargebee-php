<?php

namespace Chargebee\Resources\QuotedRamp\Enums;

enum DiscountType : string { 
    case FIXED_AMOUNT = "fixed_amount";
    case PERCENTAGE = "percentage";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>