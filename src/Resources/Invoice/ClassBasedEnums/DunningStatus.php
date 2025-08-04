<?php

namespace Chargebee\Resources\Invoice\ClassBasedEnums;

final class DunningStatus { 
    const IN_PROGRESS = "in_progress";
    const EXHAUSTED = "exhausted";
    const STOPPED = "stopped";
    const SUCCESS = "success";
    const UNKNOWN = "unknown";

    private static array $choices = [ "in_progress","exhausted","stopped","success", ];
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
