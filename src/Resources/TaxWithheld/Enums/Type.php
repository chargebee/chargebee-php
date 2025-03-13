<?php

namespace Chargebee\Resources\TaxWithheld\Enums;

enum Type : string { 
    case PAYMENT = "payment";
    case REFUND = "refund";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>