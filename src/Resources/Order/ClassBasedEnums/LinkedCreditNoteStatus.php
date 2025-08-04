<?php

namespace Chargebee\Resources\Order\ClassBasedEnums;

final class LinkedCreditNoteStatus { 
    const ADJUSTED = "adjusted";
    const REFUNDED = "refunded";
    const REFUND_DUE = "refund_due";
    const VOIDED = "voided";
    const UNKNOWN = "unknown";

    private static array $choices = [ "adjusted","refunded","refund_due","voided", ];
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
