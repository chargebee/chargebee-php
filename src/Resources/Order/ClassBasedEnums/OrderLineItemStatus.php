<?php

namespace Chargebee\Resources\Order\ClassBasedEnums;

final class OrderLineItemStatus { 
    const QUEUED = "queued";
    const AWAITING_SHIPMENT = "awaiting_shipment";
    const ON_HOLD = "on_hold";
    const DELIVERED = "delivered";
    const SHIPPED = "shipped";
    const PARTIALLY_DELIVERED = "partially_delivered";
    const RETURNED = "returned";
    const CANCELLED = "cancelled";
    const UNKNOWN = "unknown";

    private static array $choices = [ "queued","awaiting_shipment","on_hold","delivered","shipped","partially_delivered","returned","cancelled", ];
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
