<?php

namespace Chargebee\Resources\Order\Enums;

enum ResentStatus : string { 
    case FULLY_RESENT = "fully_resent";
    case PARTIALLY_RESENT = "partially_resent";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>