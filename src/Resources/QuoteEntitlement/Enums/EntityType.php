<?php

namespace Chargebee\Resources\QuoteEntitlement\Enums;

enum EntityType : string { 
    case PLAN_PRICE = "plan_price";
    case ADDON_PRICE = "addon_price";
    case CHARGE_PRICE = "charge_price";
    case CHARGE = "charge";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>