<?php

namespace Chargebee\Resources\QuotedSubscription\ClassBasedEnums;

final class ChangeOption { 
    const END_OF_TERM = "end_of_term";
    const SPECIFIC_DATE = "specific_date";
    const IMMEDIATELY = "immediately";
    const UNKNOWN = "unknown";

    private static array $choices = [ "end_of_term","specific_date","immediately", ];
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
