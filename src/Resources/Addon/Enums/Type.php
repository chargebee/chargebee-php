<?php

namespace Chargebee\Resources\Addon\Enums;

enum Type : string { 
    case ON_OFF = "on_off";
    case QUANTITY = "quantity";
    case TIERED = "tiered";
    case VOLUME = "volume";
    case STAIRSTEP = "stairstep";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>