<?php

namespace Chargebee\Resources\Einvoice\Enums;

enum EinvoiceArtifactDirection : string { 
    case OUTBOUND = "outbound";
    case INBOUND = "inbound";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>