<?php

namespace Chargebee\Resources\Ramp\ClassBasedEnums;

final class Status { 
    const SCHEDULED = "scheduled";
    const SUCCEEDED = "succeeded";
    const FAILED = "failed";
    const DRAFT = "draft";
    const UNKNOWN = "unknown";

    private static array $choices = [ "scheduled","succeeded","failed","draft", ];
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
