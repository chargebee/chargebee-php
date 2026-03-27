<?php

namespace Chargebee\Resources\CpqQuoteSignature\Enums;

enum QuoteType : string { 
    case CONSOLIDATED = "consolidated";
    case DETAILED = "detailed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>