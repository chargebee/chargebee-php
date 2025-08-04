<?php

namespace Chargebee\Resources\Addon\ClassBasedEnums;

final class Status { 
    const ACTIVE = "active";
    const ARCHIVED = "archived";
    const DELETED = "deleted";
    const UNKNOWN = "unknown";

    private static array $choices = [ "active","archived","deleted", ];
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
