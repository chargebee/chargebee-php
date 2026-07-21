<?php

namespace Chargebee\Resources\QuoteLineGroup\Enums;

enum LineItemProrationMode : string { 
    case RESET = "reset";
    case DELTA = "delta";
    case SERVICE_PERIOD_REVISION = "service_period_revision";
    case ADJUSTED_TERM = "adjusted_term";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>