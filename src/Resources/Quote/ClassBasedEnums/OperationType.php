<?php

namespace Chargebee\Resources\Quote\ClassBasedEnums;

final class OperationType { 
    const CREATE_SUBSCRIPTION_FOR_CUSTOMER = "create_subscription_for_customer";
    const CHANGE_SUBSCRIPTION = "change_subscription";
    const ONETIME_INVOICE = "onetime_invoice";
    const RENEW_SUBSCRIPTION = "renew_subscription";
    const UNKNOWN = "unknown";

    private static array $choices = [ "create_subscription_for_customer","change_subscription","onetime_invoice","renew_subscription", ];
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
