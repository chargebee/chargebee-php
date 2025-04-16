<?php

namespace Chargebee\Resources\PaymentIntent\Enums;

enum Status : string { 
    case INITED = "inited";
    case IN_PROGRESS = "in_progress";
    case AUTHORIZED = "authorized";
    case CONSUMED = "consumed";
    case EXPIRED = "expired";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>