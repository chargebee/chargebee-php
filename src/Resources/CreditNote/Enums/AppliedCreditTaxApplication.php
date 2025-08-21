<?php

namespace Chargebee\Resources\CreditNote\Enums;

enum AppliedCreditTaxApplication : string { 
    case PRE_TAX = "pre_tax";
    case POST_TAX = "post_tax";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>