<?php

namespace Chargebee\Resources\Estimate\Enums;

enum PaymentScheduleEstimateEntityType : string { 
    case INVOICE = "invoice";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>