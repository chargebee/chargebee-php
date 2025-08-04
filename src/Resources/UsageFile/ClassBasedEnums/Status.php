<?php

namespace Chargebee\Resources\UsageFile\ClassBasedEnums;

final class Status { 
    const QUEUED = "queued";
    const IMPORTED = "imported";
    const PROCESSING = "processing";
    const PROCESSED = "processed";
    const FAILED = "failed";
    const UNKNOWN = "unknown";

    private static array $choices = [ "queued","imported","processing","processed","failed", ];
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
