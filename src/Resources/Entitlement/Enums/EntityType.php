<?php

namespace Chargebee\Resources\Entitlement\Enums;

enum EntityType : string { 
    case PLAN = "plan";
    case ADDON = "addon";
    case CHARGE = "charge";
    case PLAN_PRICE = "plan_price";
    case ADDON_PRICE = "addon_price";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>