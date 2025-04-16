<?php

namespace Chargebee\Enums;

enum UnbilledChargesHandling : string { 
    case NO_ACTION = "no_action";
    case INVOICE = "invoice";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>