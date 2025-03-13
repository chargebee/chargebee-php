<?php

namespace Chargebee\Enums;

enum UnbilledChargesOption : string { 
    case INVOICE = "invoice";
    case DELETE = "delete";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>