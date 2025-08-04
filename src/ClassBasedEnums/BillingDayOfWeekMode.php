<?php

namespace Chargebee\ClassBasedEnums;

final class BillingDayOfWeekMode { 
    const USING_DEFAULTS = "using_defaults";
    const MANUALLY_SET = "manually_set";
    const UNKNOWN = "unknown";

    private static array $choices = [ "using_defaults","manually_set", ];
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
