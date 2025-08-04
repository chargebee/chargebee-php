<?php

namespace Chargebee\Resources\Customer\ClassBasedEnums;

final class PiiCleared { 
    const ACTIVE = "active";
    const SCHEDULED_FOR_CLEAR = "scheduled_for_clear";
    const CLEARED = "cleared";
    const UNKNOWN = "unknown";

    private static array $choices = [ "active","scheduled_for_clear","cleared", ];
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
