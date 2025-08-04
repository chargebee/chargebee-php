<?php

namespace Chargebee\Resources\Plan\ClassBasedEnums;

final class ShippingFrequencyPeriodUnit { 
    const YEAR = "year";
    const MONTH = "month";
    const WEEK = "week";
    const DAY = "day";
    const UNKNOWN = "unknown";

    private static array $choices = [ "year","month","week","day", ];
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
