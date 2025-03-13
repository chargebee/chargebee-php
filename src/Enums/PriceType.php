<?php

namespace Chargebee\Enums;

enum PriceType : string { 
    case TAX_EXCLUSIVE = "tax_exclusive";
    case TAX_INCLUSIVE = "tax_inclusive";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>