<?php

namespace Chargebee\Resources\Customer\ClassBasedEnums;

final class BillingDayOfWeek { 
    const SUNDAY = "sunday";
    const MONDAY = "monday";
    const TUESDAY = "tuesday";
    const WEDNESDAY = "wednesday";
    const THURSDAY = "thursday";
    const FRIDAY = "friday";
    const SATURDAY = "saturday";
    const UNKNOWN = "unknown";

    private static array $choices = [ "sunday","monday","tuesday","wednesday","thursday","friday","saturday", ];
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
