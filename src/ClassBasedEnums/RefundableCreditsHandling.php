<?php

namespace Chargebee\ClassBasedEnums;

final class RefundableCreditsHandling { 
    const NO_ACTION = "no_action";
    const SCHEDULE_REFUND = "schedule_refund";
    const UNKNOWN = "unknown";

    private static array $choices = [ "no_action","schedule_refund", ];
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
