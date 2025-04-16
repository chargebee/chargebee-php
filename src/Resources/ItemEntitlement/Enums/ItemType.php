<?php

namespace Chargebee\Resources\ItemEntitlement\Enums;

enum ItemType : string { 
    case PLAN = "plan";
    case ADDON = "addon";
    case CHARGE = "charge";
    case SUBSCRIPTION = "subscription";
    case ITEM = "item";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>