<?php

namespace Chargebee\Resources\Transaction\ClassBasedEnums;

final class Type { 
    const AUTHORIZATION = "authorization";
    const PAYMENT = "payment";
    const REFUND = "refund";
    const PAYMENT_REVERSAL = "payment_reversal";
    const UNKNOWN = "unknown";

    private static array $choices = [ "authorization","payment","refund","payment_reversal", ];
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
