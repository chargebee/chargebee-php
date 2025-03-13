<?php

namespace Chargebee\Resources\Customer\Enums;

enum ChildAccountAccessPortalEditSubscriptions : string { 
    case YES = "yes";
    case VIEW_ONLY = "view_only";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>