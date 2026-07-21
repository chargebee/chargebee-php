<?php

namespace Chargebee\Resources\Meter\Enums;

enum FeatureStatus : string { 
    case ACTIVE = "active";
    case ARCHIVED = "archived";
    case DRAFT = "draft";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>