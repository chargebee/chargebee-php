<?php

namespace Chargebee\ClassBasedEnums;

final class PricingType { 
    const PER_UNIT = "per_unit";
    const FLAT_FEE = "flat_fee";
    const PACKAGE = "package";
    const UNKNOWN = "unknown";

    private static array $choices = [ "per_unit","flat_fee","package", ];
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
