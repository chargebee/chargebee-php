<?php

namespace Chargebee\Resources\HostedPage\Enums;

enum Type : string { 
    case CHECKOUT_NEW = "checkout_new";
    case CHECKOUT_EXISTING = "checkout_existing";
    case UPDATE_PAYMENT_METHOD = "update_payment_method";
    case MANAGE_PAYMENT_SOURCES = "manage_payment_sources";
    case COLLECT_NOW = "collect_now";
    case EXTEND_SUBSCRIPTION = "extend_subscription";
    case CHECKOUT_ONE_TIME = "checkout_one_time";
    case PRE_CANCEL = "pre_cancel";
    case VIEW_VOUCHER = "view_voucher";
    case ACCEPT_QUOTE = "accept_quote";
    case CHECKOUT_GIFT = "checkout_gift";
    case CLAIM_GIFT = "claim_gift";
    /*
    * @depcreated
    */
    case UPDATE_CARD = "update_card";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>