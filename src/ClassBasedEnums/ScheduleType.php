<?php

namespace Chargebee\ClassBasedEnums;

final class ScheduleType { 
    const IMMEDIATE = "immediate";
    const SPECIFIC_DATES = "specific_dates";
    const FIXED_INTERVALS = "fixed_intervals";
    const UNKNOWN = "unknown";

    private static array $choices = [ "immediate","specific_dates","fixed_intervals", ];
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
