<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\ClassBasedEnums;

final class ChangeType { 
    const DOWNGRADE = "downgrade";
    const UNKNOWN = "unknown";

    private static array $choices = [ "downgrade", ];
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
