<?php

namespace Chargebee\Enums;

enum ItemType : string { 
    case PLAN = "plan";
    case ADDON = "addon";
    case CHARGE = "charge";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>