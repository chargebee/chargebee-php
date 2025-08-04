<?php

namespace Chargebee\Resources\InAppSubscription\ClassBasedEnums;

final class StoreStatus { 
    const IN_TRIAL = "in_trial";
    const ACTIVE = "active";
    const CANCELLED = "cancelled";
    const PAUSED = "paused";
    const UNKNOWN = "unknown";

    private static array $choices = [ "in_trial","active","cancelled","paused", ];
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
