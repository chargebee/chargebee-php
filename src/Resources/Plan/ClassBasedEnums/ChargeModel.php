<?php

namespace Chargebee\Resources\Plan\ClassBasedEnums;

final class ChargeModel { 
    const FLAT_FEE = "flat_fee";
    const PER_UNIT = "per_unit";
    const TIERED = "tiered";
    const VOLUME = "volume";
    const STAIRSTEP = "stairstep";
    const UNKNOWN = "unknown";

    private static array $choices = [ "flat_fee","per_unit","tiered","volume","stairstep", ];
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
