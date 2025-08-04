<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItem\ClassBasedEnums;

final class Status { 
    const ACTIVE = "active";
    const EXPIRED = "expired";
    const CANCELLED = "cancelled";
    const IN_DUNNING = "in_dunning";
    const IN_GRACE_PERIOD = "in_grace_period";
    const PAUSED = "paused";
    const UNKNOWN = "unknown";

    private static array $choices = [ "active","expired","cancelled","in_dunning","in_grace_period","paused", ];
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
