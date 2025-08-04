<?php

namespace Chargebee\Resources\TimeMachine\ClassBasedEnums;

final class TimeTravelStatus { 
    const NOT_ENABLED = "not_enabled";
    const IN_PROGRESS = "in_progress";
    const SUCCEEDED = "succeeded";
    const FAILED = "failed";
    const UNKNOWN = "unknown";

    private static array $choices = [ "not_enabled","in_progress","succeeded","failed", ];
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
