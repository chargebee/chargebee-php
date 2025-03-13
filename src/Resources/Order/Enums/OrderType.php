<?php

namespace Chargebee\Resources\Order\Enums;

enum OrderType : string { 
    case MANUAL = "manual";
    case SYSTEM_GENERATED = "system_generated";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>