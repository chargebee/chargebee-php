<?php

namespace Chargebee\Resources\CreditNote\ClassBasedEnums;

final class ReasonCode { 
    const WRITE_OFF = "write_off";
    const SUBSCRIPTION_CHANGE = "subscription_change";
    const SUBSCRIPTION_CANCELLATION = "subscription_cancellation";
    const SUBSCRIPTION_PAUSE = "subscription_pause";
    const CHARGEBACK = "chargeback";
    const PRODUCT_UNSATISFACTORY = "product_unsatisfactory";
    const SERVICE_UNSATISFACTORY = "service_unsatisfactory";
    const ORDER_CHANGE = "order_change";
    const ORDER_CANCELLATION = "order_cancellation";
    const WAIVER = "waiver";
    const OTHER = "other";
    const FRAUDULENT = "fraudulent";
    const UNKNOWN = "unknown";

    private static array $choices = [ "write_off","subscription_change","subscription_cancellation","subscription_pause","chargeback","product_unsatisfactory","service_unsatisfactory","order_change","order_cancellation","waiver","other","fraudulent", ];
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
