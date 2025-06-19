<?php

namespace Chargebee\Enums;

enum ChargebeeResponseSchemaType : string { 
    case PLANS_ADDONS = "plans_addons";
    case ITEMS = "items";
    case COMPAT = "compat";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>