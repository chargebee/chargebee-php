<?php

namespace Chargebee\Resources\Invoice\ClassBasedEnums;

final class LinkedOrderStatus { 
    const NEW = "new";
    const PROCESSING = "processing";
    const COMPLETE = "complete";
    const CANCELLED = "cancelled";
    const VOIDED = "voided";
    const QUEUED = "queued";
    const AWAITING_SHIPMENT = "awaiting_shipment";
    const ON_HOLD = "on_hold";
    const DELIVERED = "delivered";
    const SHIPPED = "shipped";
    const PARTIALLY_DELIVERED = "partially_delivered";
    const RETURNED = "returned";
    const UNKNOWN = "unknown";

    private static array $choices = [ "new","processing","complete","cancelled","voided","queued","awaiting_shipment","on_hold","delivered","shipped","partially_delivered","returned", ];
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
