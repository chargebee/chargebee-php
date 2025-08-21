<?php

namespace Chargebee\Resources\WebhookEndpoint\Enums;

enum ApiVersion : string { 
    case V1 = "v1";
    case V2 = "v2";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>