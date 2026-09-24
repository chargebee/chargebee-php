<?php

namespace Chargebee\Resources\Dispute\Enums;

enum Type : string { 
    case CHARGEBACK = "chargeback";
    case INQUIRY = "inquiry";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>