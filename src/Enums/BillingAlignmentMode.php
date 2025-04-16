<?php

namespace Chargebee\Enums;

enum BillingAlignmentMode : string { 
    case IMMEDIATE = "immediate";
    case DELAYED = "delayed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>