<?php

namespace Chargebee\Resources\Meter\Enums;

enum Type : string { 
    case SIMPLE = "simple";
    case COMPOUND = "compound";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>