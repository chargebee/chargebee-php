<?php

namespace Chargebee\Enums;

enum TaxOverrideReason : string { 
    case ID_EXEMPT = "id_exempt";
    case CUSTOMER_EXEMPT = "customer_exempt";
    case EXPORT = "export";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>