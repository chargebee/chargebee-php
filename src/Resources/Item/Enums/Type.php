<?php

namespace Chargebee\Resources\Item\Enums;

enum Type : string { 
    case PLAN = "plan";
    case ADDON = "addon";
    case CHARGE = "charge";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>