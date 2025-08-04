<?php

namespace Chargebee\ClassBasedEnums;

final class DunningType { 
    const AUTO_COLLECT = "auto_collect";
    const OFFLINE = "offline";
    const DIRECT_DEBIT = "direct_debit";
    const UNKNOWN = "unknown";

    private static array $choices = [ "auto_collect","offline","direct_debit", ];
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
