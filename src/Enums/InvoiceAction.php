<?php

namespace Chargebee\Enums;

enum InvoiceAction : string { 
    case VOID = "void";
    case WRITE_OFF = "write_off";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>