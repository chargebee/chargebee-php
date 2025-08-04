<?php

namespace Chargebee\ClassBasedEnums;

final class ApplyOn { 
    const INVOICE_AMOUNT = "invoice_amount";
    const SPECIFIC_ITEM_PRICE = "specific_item_price";
    const UNKNOWN = "unknown";

    private static array $choices = [ "invoice_amount","specific_item_price", ];
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
