<?php

namespace Chargebee\ClassBasedEnums;

final class TrialEndAction { 
    const SITE_DEFAULT = "site_default";
    const PLAN_DEFAULT = "plan_default";
    const ACTIVATE_SUBSCRIPTION = "activate_subscription";
    const CANCEL_SUBSCRIPTION = "cancel_subscription";
    const UNKNOWN = "unknown";

    private static array $choices = [ "site_default","plan_default","activate_subscription","cancel_subscription", ];
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
