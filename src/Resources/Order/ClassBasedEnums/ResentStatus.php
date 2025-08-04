<?php

namespace Chargebee\Resources\Order\ClassBasedEnums;

final class ResentStatus { 
    const FULLY_RESENT = "fully_resent";
    const PARTIALLY_RESENT = "partially_resent";
    const UNKNOWN = "unknown";

    private static array $choices = [ "fully_resent","partially_resent", ];
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
