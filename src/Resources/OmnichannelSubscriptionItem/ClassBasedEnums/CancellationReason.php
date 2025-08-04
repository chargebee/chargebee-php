<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItem\ClassBasedEnums;

final class CancellationReason { 
    const CUSTOMER_CANCELLED = "customer_cancelled";
    const CUSTOMER_DID_NOT_CONSENT_TO_PRICE_INCREASE = "customer_did_not_consent_to_price_increase";
    const REFUNDED_DUE_TO_APP_ISSUE = "refunded_due_to_app_issue";
    const REFUNDED_FOR_OTHER_REASON = "refunded_for_other_reason";
    const MERCHANT_REVOKED = "merchant_revoked";
    const UNKNOWN = "unknown";

    private static array $choices = [ "customer_cancelled","customer_did_not_consent_to_price_increase","refunded_due_to_app_issue","refunded_for_other_reason","merchant_revoked", ];
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
