<?php

namespace Chargebee\Resources\CollectionsPaymentPromise\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case FULFILLED = "fulfilled";
    case BROKEN = "broken";
    case CANCELLED = "cancelled";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>