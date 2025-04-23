<?php

namespace Chargebee\Resources\RecordedPurchase\Enums;

enum Source : string { 
    case APPLE_APP_STORE = "apple_app_store";
    case GOOGLE_PLAY_STORE = "google_play_store";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>