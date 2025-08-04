<?php

namespace Chargebee\Resources\Order\ClassBasedEnums;

final class PaymentStatus { 
    const NOT_PAID = "not_paid";
    const PAID = "paid";
    const UNKNOWN = "unknown";

    private static array $choices = [ "not_paid","paid", ];
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
