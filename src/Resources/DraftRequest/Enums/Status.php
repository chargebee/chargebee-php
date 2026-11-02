<?php

namespace Chargebee\Resources\DraftRequest\Enums;

enum Status : string { 
    case OPEN = "open";
    case EXECUTED = "executed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>