<?php

namespace Chargebee\Enums;

enum Mode : string { 
    case ABSOLUTE = "absolute";
    case PERCENTAGE = "percentage";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>