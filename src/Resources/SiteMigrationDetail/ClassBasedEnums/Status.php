<?php

namespace Chargebee\Resources\SiteMigrationDetail\ClassBasedEnums;

final class Status { 
    const MOVED_IN = "moved_in";
    const MOVED_OUT = "moved_out";
    const MOVING_OUT = "moving_out";
    const UNKNOWN = "unknown";

    private static array $choices = [ "moved_in","moved_out","moving_out", ];
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
