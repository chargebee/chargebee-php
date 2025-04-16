<?php

namespace Chargebee\Resources\Quote\Enums;

enum OperationType : string { 
    case CREATE_SUBSCRIPTION_FOR_CUSTOMER = "create_subscription_for_customer";
    case CHANGE_SUBSCRIPTION = "change_subscription";
    case ONETIME_INVOICE = "onetime_invoice";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>