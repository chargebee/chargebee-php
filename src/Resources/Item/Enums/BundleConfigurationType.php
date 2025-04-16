<?php

namespace Chargebee\Resources\Item\Enums;

enum BundleConfigurationType : string { 
    case FIXED = "fixed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>