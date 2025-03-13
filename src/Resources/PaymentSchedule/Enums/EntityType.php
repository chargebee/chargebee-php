<?php

namespace Chargebee\Resources\PaymentSchedule\Enums;

enum EntityType : string { 
    case INVOICE = "invoice";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>