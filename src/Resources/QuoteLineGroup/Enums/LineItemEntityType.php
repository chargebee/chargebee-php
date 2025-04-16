<?php

namespace Chargebee\Resources\QuoteLineGroup\Enums;

enum LineItemEntityType : string { 
    case ADHOC = "adhoc";
    case PLAN_ITEM_PRICE = "plan_item_price";
    case ADDON_ITEM_PRICE = "addon_item_price";
    case CHARGE_ITEM_PRICE = "charge_item_price";
    case PLAN_SETUP = "plan_setup";
    case PLAN = "plan";
    case ADDON = "addon";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>