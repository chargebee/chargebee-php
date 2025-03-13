<?php

namespace Chargebee\Enums;

enum EinvoicingMethod : string { 
    case AUTOMATIC = "automatic";
    case MANUAL = "manual";
    case SITE_DEFAULT = "site_default";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>