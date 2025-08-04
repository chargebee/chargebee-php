<?php

namespace Chargebee\ClassBasedEnums;

final class DurationType { 
    const ONE_TIME = "one_time";
    const FOREVER = "forever";
    const LIMITED_PERIOD = "limited_period";
    const UNKNOWN = "unknown";

    private static array $choices = [ "one_time","forever","limited_period", ];
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
