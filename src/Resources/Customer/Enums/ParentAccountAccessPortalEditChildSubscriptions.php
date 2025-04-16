<?php

namespace Chargebee\Resources\Customer\Enums;

enum ParentAccountAccessPortalEditChildSubscriptions : string { 
    case YES = "yes";
    case VIEW_ONLY = "view_only";
    case NO = "no";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>