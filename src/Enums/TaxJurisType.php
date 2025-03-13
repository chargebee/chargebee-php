<?php

namespace Chargebee\Enums;

enum TaxJurisType : string { 
    case COUNTRY = "country";
    case FEDERAL = "federal";
    case STATE = "state";
    case COUNTY = "county";
    case CITY = "city";
    case SPECIAL = "special";
    case UNINCORPORATED = "unincorporated";
    case OTHER = "other";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>