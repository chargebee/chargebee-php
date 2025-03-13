<?php

namespace Chargebee\Enums;

enum EcheckType : string { 
    case WEB = "web";
    case PPD = "ppd";
    case CCD = "ccd";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>