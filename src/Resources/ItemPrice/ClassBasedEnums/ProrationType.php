<?php

namespace Chargebee\Resources\ItemPrice\ClassBasedEnums;

final class ProrationType { 
    const SITE_DEFAULT = "site_default";
    const PARTIAL_TERM = "partial_term";
    const FULL_TERM = "full_term";
    const UNKNOWN = "unknown";

    private static array $choices = [ "site_default","partial_term","full_term", ];
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
