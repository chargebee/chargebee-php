<?php

namespace Chargebee\Enums;

enum AccountType : string { 
    case CHECKING = "checking";
    case SAVINGS = "savings";
    case BUSINESS_CHECKING = "business_checking";
    case CURRENT = "current";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>