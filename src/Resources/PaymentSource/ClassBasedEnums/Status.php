<?php

namespace Chargebee\Resources\PaymentSource\ClassBasedEnums;

final class Status { 
    const VALID = "valid";
    const EXPIRING = "expiring";
    const EXPIRED = "expired";
    const INVALID = "invalid";
    const PENDING_VERIFICATION = "pending_verification";
    const UNKNOWN = "unknown";

    private static array $choices = [ "valid","expiring","expired","invalid","pending_verification", ];
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
