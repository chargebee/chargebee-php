<?php

namespace Chargebee\Enums;

enum AutoCollection : string { 
    case ON = "on";
    case OFF = "off";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>