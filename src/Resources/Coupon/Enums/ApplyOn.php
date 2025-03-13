<?php

namespace Chargebee\Resources\Coupon\Enums;

enum ApplyOn : string { 
    case INVOICE_AMOUNT = "invoice_amount";
    case EACH_SPECIFIED_ITEM = "each_specified_item";
    /*
    * @depcreated
    */
    case SPECIFIED_ITEMS_TOTAL = "specified_items_total";
    /*
    * @depcreated
    */
    case EACH_UNIT_OF_SPECIFIED_ITEMS = "each_unit_of_specified_items";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>