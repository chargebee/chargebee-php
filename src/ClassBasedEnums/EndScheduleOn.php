<?php

namespace Chargebee\ClassBasedEnums;

final class EndScheduleOn { 
    const AFTER_NUMBER_OF_INTERVALS = "after_number_of_intervals";
    const SPECIFIC_DATE = "specific_date";
    const SUBSCRIPTION_END = "subscription_end";
    const UNKNOWN = "unknown";

    private static array $choices = [ "after_number_of_intervals","specific_date","subscription_end", ];
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
