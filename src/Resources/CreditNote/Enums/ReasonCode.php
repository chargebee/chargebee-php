<?php

namespace Chargebee\Resources\CreditNote\Enums;

enum ReasonCode : string { 
    case WRITE_OFF = "write_off";
    case SUBSCRIPTION_CHANGE = "subscription_change";
    case SUBSCRIPTION_CANCELLATION = "subscription_cancellation";
    case SUBSCRIPTION_PAUSE = "subscription_pause";
    case CHARGEBACK = "chargeback";
    case PRODUCT_UNSATISFACTORY = "product_unsatisfactory";
    case SERVICE_UNSATISFACTORY = "service_unsatisfactory";
    case ORDER_CHANGE = "order_change";
    case ORDER_CANCELLATION = "order_cancellation";
    case WAIVER = "waiver";
    case OTHER = "other";
    case FRAUDULENT = "fraudulent";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>