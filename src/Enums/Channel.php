<?php

namespace Chargebee\Enums;

enum Channel : string { 
    case WEB = "web";
    case APP_STORE = "app_store";
    case PLAY_STORE = "play_store";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>