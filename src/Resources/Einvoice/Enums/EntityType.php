<?php

namespace Chargebee\Resources\Einvoice\Enums;

enum EntityType : string { 
    case INVOICE = "invoice";
    case CREDIT_NOTE = "credit_note";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>