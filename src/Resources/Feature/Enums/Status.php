<?php

namespace Chargebee\Resources\Feature\Enums;

enum Status : string { 
    case ACTIVE = "active";
    case ARCHIVED = "archived";
    case DRAFT = "draft";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>