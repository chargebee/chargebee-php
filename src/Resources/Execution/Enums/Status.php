<?php

namespace Chargebee\Resources\Execution\Enums;

enum Status : string { 
    case SUCCESS = "success";
    case FAILED = "failed";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>