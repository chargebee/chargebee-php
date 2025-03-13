<?php

namespace Chargebee\Enums;

enum AvalaraSaleType : string { 
    case WHOLESALE = "wholesale";
    case RETAIL = "retail";
    case CONSUMED = "consumed";
    case VENDOR_USE = "vendor_use";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>