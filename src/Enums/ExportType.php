<?php

namespace Chargebee\Enums;

enum ExportType : string { 
    case DATA = "data";
    case IMPORT_FRIENDLY_DATA = "import_friendly_data";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>