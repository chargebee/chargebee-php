<?php

namespace Chargebee\Enums;

enum DispositionType : string { 
    case ATTACHMENT = "attachment";
    case INLINE = "inline";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>