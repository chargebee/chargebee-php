<?php

namespace Chargebee\Resources\PaymentIntent\Enums;

enum PaymentIntentMetadataSource : string { 
    case PAYMENT_METHOD_HELPER = "payment_method_helper";
    case CARD_COMPONENTS = "card_components";
    case CHECKOUT = "checkout";
    case COLLECT_NOW = "collect_now";
    case PORTAL = "portal";
    case PAYMENT_COMPONENTS = "payment_components";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>