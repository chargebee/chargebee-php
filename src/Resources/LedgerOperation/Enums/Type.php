<?php

namespace Chargebee\Resources\LedgerOperation\Enums;

enum Type : string { 
    case ALLOCATION = "allocation";
    case CAPTURE = "capture";
    case AUTHORIZE = "authorize";
    case RELEASE_AUTHORIZATION = "release_authorization";
    case CAPTURE_AUTHORIZATION = "capture_authorization";
    case EXPIRY = "expiry";
    case VOID = "void";
    case ROLLOVER = "rollover";
    case ADJUSTMENT = "adjustment";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>