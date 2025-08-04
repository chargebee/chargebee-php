<?php

namespace Chargebee\ClassBasedEnums;

final class UnbilledChargesHandling { 
    const NO_ACTION = "no_action";
    const INVOICE = "invoice";
    const UNKNOWN = "unknown";

    private static array $choices = [ "no_action","invoice", ];
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
