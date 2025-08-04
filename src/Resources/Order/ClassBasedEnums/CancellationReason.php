<?php

namespace Chargebee\Resources\Order\ClassBasedEnums;

final class CancellationReason { 
    const SHIPPING_CUT_OFF_PASSED = "shipping_cut_off_passed";
    const PRODUCT_UNSATISFACTORY = "product_unsatisfactory";
    const THIRD_PARTY_CANCELLATION = "third_party_cancellation";
    const PRODUCT_NOT_REQUIRED = "product_not_required";
    const DELIVERY_DATE_MISSED = "delivery_date_missed";
    const ALTERNATIVE_FOUND = "alternative_found";
    const INVOICE_WRITTEN_OFF = "invoice_written_off";
    const INVOICE_VOIDED = "invoice_voided";
    const FRAUDULENT_TRANSACTION = "fraudulent_transaction";
    const PAYMENT_DECLINED = "payment_declined";
    const SUBSCRIPTION_CANCELLED = "subscription_cancelled";
    const PRODUCT_NOT_AVAILABLE = "product_not_available";
    const OTHERS = "others";
    const ORDER_RESENT = "order_resent";
    const UNKNOWN = "unknown";

    private static array $choices = [ "shipping_cut_off_passed","product_unsatisfactory","third_party_cancellation","product_not_required","delivery_date_missed","alternative_found","invoice_written_off","invoice_voided","fraudulent_transaction","payment_declined","subscription_cancelled","product_not_available","others","order_resent", ];
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
