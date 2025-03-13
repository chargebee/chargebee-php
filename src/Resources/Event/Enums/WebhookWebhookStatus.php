<?php

namespace Chargebee\Resources\Event\Enums;

enum WebhookWebhookStatus : string { 
    case NOT_CONFIGURED = "not_configured";
    case SCHEDULED = "scheduled";
    case SUCCEEDED = "succeeded";
    case RE_SCHEDULED = "re_scheduled";
    case FAILED = "failed";
    case SKIPPED = "skipped";
    case NOT_APPLICABLE = "not_applicable";
    case DISABLED = "disabled";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>