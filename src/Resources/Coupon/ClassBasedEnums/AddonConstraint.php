<?php

namespace Chargebee\Resources\Coupon\ClassBasedEnums;

final class AddonConstraint { 
    const NONE = "none";
    const ALL = "all";
    const SPECIFIC = "specific";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "none","all","specific","not_applicable", ];
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
