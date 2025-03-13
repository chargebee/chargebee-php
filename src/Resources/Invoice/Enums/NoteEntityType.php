<?php

namespace Chargebee\Resources\Invoice\Enums;

enum NoteEntityType : string { 
    case COUPON = "coupon";
    case SUBSCRIPTION = "subscription";
    case CUSTOMER = "customer";
    case PLAN_ITEM_PRICE = "plan_item_price";
    case ADDON_ITEM_PRICE = "addon_item_price";
    case CHARGE_ITEM_PRICE = "charge_item_price";
    case TAX = "tax";
    case PLAN = "plan";
    case ADDON = "addon";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>