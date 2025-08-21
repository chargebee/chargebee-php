<?php

namespace Chargebee\Resources\OmnichannelOneTimeOrder\Enums;

enum OmnichannelOneTimeOrderItemCancellationReason : string { 
    case CUSTOMER_CANCELLED = "customer_cancelled";
    case CUSTOMER_DID_NOT_CONSENT_TO_PRICE_INCREASE = "customer_did_not_consent_to_price_increase";
    case REFUNDED_DUE_TO_APP_ISSUE = "refunded_due_to_app_issue";
    case REFUNDED_FOR_OTHER_REASON = "refunded_for_other_reason";
    case MERCHANT_REVOKED = "merchant_revoked";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>