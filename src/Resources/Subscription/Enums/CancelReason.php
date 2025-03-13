<?php

namespace Chargebee\Resources\Subscription\Enums;

enum CancelReason : string { 
    case NOT_PAID = "not_paid";
    case NO_CARD = "no_card";
    case FRAUD_REVIEW_FAILED = "fraud_review_failed";
    case NON_COMPLIANT_EU_CUSTOMER = "non_compliant_eu_customer";
    case TAX_CALCULATION_FAILED = "tax_calculation_failed";
    case CURRENCY_INCOMPATIBLE_WITH_GATEWAY = "currency_incompatible_with_gateway";
    case NON_COMPLIANT_CUSTOMER = "non_compliant_customer";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>