<?php

namespace Chargebee\Resources\Customer\ClassBasedEnums;

final class CardStatus { 
    const NO_CARD = "no_card";
    const VALID = "valid";
    const EXPIRING = "expiring";
    const EXPIRED = "expired";
    const PENDING_VERIFICATION = "pending_verification";
    const INVALID = "invalid";
    const UNKNOWN = "unknown";

    private static array $choices = [ "no_card","valid","expiring","expired","pending_verification","invalid", ];
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
