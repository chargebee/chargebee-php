<?php

namespace Chargebee\ClassBasedEnums;

final class ProrationType { 
    const FULL_TERM = "full_term";
    const PARTIAL_TERM = "partial_term";
    const NONE = "none";
    const UNKNOWN = "unknown";

    private static array $choices = [ "full_term","partial_term","none", ];
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
