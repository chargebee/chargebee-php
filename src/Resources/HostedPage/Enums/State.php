<?php

namespace Chargebee\Resources\HostedPage\Enums;

enum State : string { 
    case CREATED = "created";
    case REQUESTED = "requested";
    case SUCCEEDED = "succeeded";
    case CANCELLED = "cancelled";
    case ACKNOWLEDGED = "acknowledged";
    /*
    * @depcreated
    */
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>