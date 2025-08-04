<?php

namespace Chargebee\Resources\Coupon\ClassBasedEnums;

final class ApplyOn { 
    const INVOICE_AMOUNT = "invoice_amount";
    const EACH_SPECIFIED_ITEM = "each_specified_item";
    /*
    * @depcreated
    */
    const specified_items_total = "specified_items_total";
    /*
    * @depcreated
    */
    const each_unit_of_specified_items = "each_unit_of_specified_items";
    const UNKNOWN = "unknown";

    private static array $choices = [ "invoice_amount","each_specified_item", ];
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
