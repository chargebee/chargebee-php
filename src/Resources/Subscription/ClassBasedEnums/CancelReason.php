<?php

namespace Chargebee\Resources\Subscription\ClassBasedEnums;

final class CancelReason { 
    const NOT_PAID = "not_paid";
    const NO_CARD = "no_card";
    const FRAUD_REVIEW_FAILED = "fraud_review_failed";
    const NON_COMPLIANT_EU_CUSTOMER = "non_compliant_eu_customer";
    const TAX_CALCULATION_FAILED = "tax_calculation_failed";
    const CURRENCY_INCOMPATIBLE_WITH_GATEWAY = "currency_incompatible_with_gateway";
    const NON_COMPLIANT_CUSTOMER = "non_compliant_customer";
    const UNKNOWN = "unknown";

    private static array $choices = [ "not_paid","no_card","fraud_review_failed","non_compliant_eu_customer","tax_calculation_failed","currency_incompatible_with_gateway","non_compliant_customer", ];
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
