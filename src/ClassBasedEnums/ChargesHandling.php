<?php

namespace Chargebee\ClassBasedEnums;

final class ChargesHandling { 
    const INVOICE_IMMEDIATELY = "invoice_immediately";
    const ADD_TO_UNBILLED_CHARGES = "add_to_unbilled_charges";
    const UNKNOWN = "unknown";

    private static array $choices = [ "invoice_immediately","add_to_unbilled_charges", ];
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
