<?php

namespace Chargebee\Resources\PortalSession\Enums;

enum Status : string { 
    case CREATED = "created";
    case LOGGED_IN = "logged_in";
    case LOGGED_OUT = "logged_out";
    case NOT_YET_ACTIVATED = "not_yet_activated";
    case ACTIVATED = "activated";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>