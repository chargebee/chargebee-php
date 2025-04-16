<?php

namespace Chargebee\Enums;

enum ChargesHandling : string { 
    case INVOICE_IMMEDIATELY = "invoice_immediately";
    case ADD_TO_UNBILLED_CHARGES = "add_to_unbilled_charges";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>