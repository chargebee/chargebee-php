<?php

namespace Chargebee\ClassBasedEnums;

final class EntityType { 
    const CUSTOMER = "customer";
    const SUBSCRIPTION = "subscription";
    const COUPON = "coupon";
    const PLAN_ITEM_PRICE = "plan_item_price";
    const ADDON_ITEM_PRICE = "addon_item_price";
    const CHARGE_ITEM_PRICE = "charge_item_price";
    const INVOICE = "invoice";
    const QUOTE = "quote";
    const CREDIT_NOTE = "credit_note";
    const TRANSACTION = "transaction";
    const PLAN = "plan";
    const ADDON = "addon";
    const ORDER = "order";
    const ITEM_FAMILY = "item_family";
    const ITEM = "item";
    const ITEM_PRICE = "item_price";
    const PLAN_ITEM = "plan_item";
    const ADDON_ITEM = "addon_item";
    const CHARGE_ITEM = "charge_item";
    const PLAN_PRICE = "plan_price";
    const ADDON_PRICE = "addon_price";
    const CHARGE_PRICE = "charge_price";
    const DIFFERENTIAL_PRICE = "differential_price";
    const ATTACHED_ITEM = "attached_item";
    const FEATURE = "feature";
    const SUBSCRIPTION_ENTITLEMENT = "subscription_entitlement";
    const ITEM_ENTITLEMENT = "item_entitlement";
    const BUSINESS_ENTITY = "business_entity";
    const PRICE_VARIANT = "price_variant";
    const OMNICHANNEL_SUBSCRIPTION = "omnichannel_subscription";
    const OMNICHANNEL_SUBSCRIPTION_ITEM = "omnichannel_subscription_item";
    const OMNICHANNEL_TRANSACTION = "omnichannel_transaction";
    const RECORDED_PURCHASE = "recorded_purchase";
    const OMNICHANNEL_SUBSCRIPTION_ITEM_SCHEDULED_CHANGE = "omnichannel_subscription_item_scheduled_change";
    const SALES_ORDER = "sales_order";
    const UNKNOWN = "unknown";

    private static array $choices = [ "customer","subscription","coupon","plan_item_price","addon_item_price","charge_item_price","invoice","quote","credit_note","transaction","plan","addon","order","item_family","item","item_price","plan_item","addon_item","charge_item","plan_price","addon_price","charge_price","differential_price","attached_item","feature","subscription_entitlement","item_entitlement","business_entity","price_variant","omnichannel_subscription","omnichannel_subscription_item","omnichannel_transaction","recorded_purchase","omnichannel_subscription_item_scheduled_change","sales_order", ];
    public final string $value;

    public static function tryFromValue(string $key): self
    {
        $instance = new self();
        $instance->value = self::isValidChoice($key) ? $key : self::UNKNOWN;

        return $instance;
    }
    public function __toString(): string
    {
        return $this->value;
    }
    private static function isValidChoice(string $key): bool
    {
        return in_array($key, self::$choices);
    }
}
?>
