<?php

namespace Chargebee\Resources\AdvanceInvoiceSchedule\ClassBasedEnums;

final class ScheduleType { 
    const FIXED_INTERVALS = "fixed_intervals";
    const SPECIFIC_DATES = "specific_dates";
    const UNKNOWN = "unknown";

    private static array $choices = [ "fixed_intervals","specific_dates", ];
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
