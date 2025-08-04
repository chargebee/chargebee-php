<?php

namespace Chargebee\Resources\Token\ClassBasedEnums;

final class Status { 
    const NEW = "new";
    const EXPIRED = "expired";
    const CONSUMED = "consumed";
    const UNKNOWN = "unknown";

    private static array $choices = [ "new","expired","consumed", ];
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
