<?php

namespace Chargebee\Enums;

enum ReportBy : string { 
    case CUSTOMER = "customer";
    case INVOICE = "invoice";
    case PRODUCT = "product";
    case SUBSCRIPTION = "subscription";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>