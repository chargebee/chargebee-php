<?php

namespace Chargebee\Resources\Export\Enums;

enum MimeType : string { 
    case PDF = "pdf";
    case ZIP = "zip";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>