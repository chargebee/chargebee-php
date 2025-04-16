<?php

namespace Chargebee\Resources\PaymentVoucher\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case CONSUMED = "consumed";
    case EXPIRED = "expired";
    case FAILURE = "failure";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>