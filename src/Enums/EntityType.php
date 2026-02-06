<?php

namespace Chargebee\Enums;

enum EntityType : string { 
    case CUSTOMER = "customer";
    case SUBSCRIPTION = "subscription";
    case COUPON = "coupon";
    case PLAN_ITEM_PRICE = "plan_item_price";
    case ADDON_ITEM_PRICE = "addon_item_price";
    case CHARGE_ITEM_PRICE = "charge_item_price";
    case INVOICE = "invoice";
    case QUOTE = "quote";
    case CREDIT_NOTE = "credit_note";
    case TRANSACTION = "transaction";
    case PLAN = "plan";
    case ADDON = "addon";
    case ORDER = "order";
    case ITEM_FAMILY = "item_family";
    case ITEM = "item";
    case ITEM_PRICE = "item_price";
    case PLAN_ITEM = "plan_item";
    case ADDON_ITEM = "addon_item";
    case CHARGE_ITEM = "charge_item";
    case PLAN_PRICE = "plan_price";
    case ADDON_PRICE = "addon_price";
    case CHARGE_PRICE = "charge_price";
    case DIFFERENTIAL_PRICE = "differential_price";
    case ATTACHED_ITEM = "attached_item";
    case FEATURE = "feature";
    case SUBSCRIPTION_ENTITLEMENT = "subscription_entitlement";
    case ITEM_ENTITLEMENT = "item_entitlement";
    case BUSINESS_ENTITY = "business_entity";
    case PRICE_VARIANT = "price_variant";
    case OMNICHANNEL_SUBSCRIPTION = "omnichannel_subscription";
    case OMNICHANNEL_SUBSCRIPTION_ITEM = "omnichannel_subscription_item";
    case OMNICHANNEL_TRANSACTION = "omnichannel_transaction";
    case RECORDED_PURCHASE = "recorded_purchase";
    case OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CHANGE = "omnichannel_subscription_item_scheduled_change";
    case SALES_ORDER = "sales_order";
    case OMNICHANNEL_ONE_TIME_ORDER = "omnichannel_one_time_order";
    case OMNICHANNEL_ONE_TIME_ORDER_ITEM = "omnichannel_one_time_order_item";
    case USAGE_FILE = "usage_file";
    case BUSINESS_RULE = "business_rule";
    case RULESET = "ruleset";
    case CHARGE = "charge";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>