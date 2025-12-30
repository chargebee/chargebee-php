<?php

namespace Chargebee\Enums;

enum ExcludeTaxType : string { 
    case EXCLUSIVE = "exclusive";
    case NONE = "none";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>