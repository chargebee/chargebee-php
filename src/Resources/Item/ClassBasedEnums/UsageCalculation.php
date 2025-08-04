<?php

namespace Chargebee\Resources\Item\ClassBasedEnums;

final class UsageCalculation { 
    const SUM_OF_USAGES = "sum_of_usages";
    const LAST_USAGE = "last_usage";
    const MAX_USAGE = "max_usage";
    const UNKNOWN = "unknown";

    private static array $choices = [ "sum_of_usages","last_usage","max_usage", ];
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
