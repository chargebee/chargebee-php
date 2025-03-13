<?php

namespace Chargebee\Resources\OmnichannelSubscription\Enums;

enum OmnichannelSubscriptionItemExpirationReason : string { 
    case BILLING_ERROR = "billing_error";
    case PRODUCT_NOT_AVAILABLE = "product_not_available";
    case OTHER = "other";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>