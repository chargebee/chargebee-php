<?php

namespace Chargebee\Resources\OfferFulfillment\Enums;

enum ErrorCode : string { 
    case BILLING_UPDATE_FAILED = "billing_update_failed";
    case CHECKOUT_ABANDONED = "checkout_abandoned";
    case EXTERNAL_FULFILLMENT_FAILED = "external_fulfillment_failed";
    case INTERNAL_ERROR = "internal_error";
    case FULFILLMENT_EXPIRED = "fulfillment_expired";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>