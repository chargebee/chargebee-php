<?php

namespace Chargebee\Resources\Subscription\ClassBasedEnums;

final class Status { 
    const FUTURE = "future";
    const IN_TRIAL = "in_trial";
    const ACTIVE = "active";
    const NON_RENEWING = "non_renewing";
    const PAUSED = "paused";
    const CANCELLED = "cancelled";
    const TRANSFERRED = "transferred";
    const UNKNOWN = "unknown";

    private static array $choices = [ "future","in_trial","active","non_renewing","paused","cancelled","transferred", ];
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
