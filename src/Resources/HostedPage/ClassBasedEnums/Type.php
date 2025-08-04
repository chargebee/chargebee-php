<?php

namespace Chargebee\Resources\HostedPage\ClassBasedEnums;

final class Type { 
    const CHECKOUT_NEW = "checkout_new";
    const CHECKOUT_EXISTING = "checkout_existing";
    const UPDATE_PAYMENT_METHOD = "update_payment_method";
    const MANAGE_PAYMENT_SOURCES = "manage_payment_sources";
    const COLLECT_NOW = "collect_now";
    const EXTEND_SUBSCRIPTION = "extend_subscription";
    const CHECKOUT_ONE_TIME = "checkout_one_time";
    const PRE_CANCEL = "pre_cancel";
    const VIEW_VOUCHER = "view_voucher";
    const CHECKOUT_GIFT = "checkout_gift";
    const CLAIM_GIFT = "claim_gift";
    /*
    * @depcreated
    */
    const update_card = "update_card";
    const UNKNOWN = "unknown";

    private static array $choices = [ "checkout_new","checkout_existing","update_payment_method","manage_payment_sources","collect_now","extend_subscription","checkout_one_time","pre_cancel","view_voucher","checkout_gift","claim_gift", ];
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
