<?php

namespace Chargebee\Resources\Order\Enums;

enum OrderLineItemStatus : string { 
    case QUEUED = "queued";
    case AWAITING_SHIPMENT = "awaiting_shipment";
    case ON_HOLD = "on_hold";
    case DELIVERED = "delivered";
    case SHIPPED = "shipped";
    case PARTIALLY_DELIVERED = "partially_delivered";
    case RETURNED = "returned";
    case CANCELLED = "cancelled";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>