<?php

namespace Chargebee\Resources\Currency\Enums;

enum ForexType : string { 
    case MANUAL = "manual";
    case AUTO = "auto";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>