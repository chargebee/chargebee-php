<?php

namespace Chargebee\Enums;

enum EventName : string { 
    case CANCELLATION_PAGE_LOADED = "cancellation_page_loaded";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>