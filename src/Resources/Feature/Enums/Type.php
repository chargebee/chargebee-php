<?php

namespace Chargebee\Resources\Feature\Enums;

enum Type : string { 
    case SWITCH = "switch";
    case CUSTOM = "custom";
    case QUANTITY = "quantity";
    case RANGE = "range";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>