<?php

namespace Chargebee\Resources\Export\ClassBasedEnums;

final class Status { 
    const IN_PROCESS = "in_process";
    const COMPLETED = "completed";
    const FAILED = "failed";
    const UNKNOWN = "unknown";

    private static array $choices = [ "in_process","completed","failed", ];
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
