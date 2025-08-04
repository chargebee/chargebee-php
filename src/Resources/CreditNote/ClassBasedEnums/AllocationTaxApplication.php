<?php

namespace Chargebee\Resources\CreditNote\ClassBasedEnums;

final class AllocationTaxApplication { 
    const PRE_TAX = "pre_tax";
    const POST_TAX = "post_tax";
    const UNKNOWN = "unknown";

    private static array $choices = [ "pre_tax","post_tax", ];
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
