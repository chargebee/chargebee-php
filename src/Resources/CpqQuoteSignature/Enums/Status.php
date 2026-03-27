<?php

namespace Chargebee\Resources\CpqQuoteSignature\Enums;

enum Status : string { 
    case DRAFT = "draft";
    case ACTIVE = "active";
    case SIGNED = "signed";
    case EXPIRED = "expired";
    case CANCELLED = "cancelled";
    case DECLINED = "declined";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>