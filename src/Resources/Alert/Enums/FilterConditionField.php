<?php

namespace Chargebee\Resources\Alert\Enums;

enum FilterConditionField : string { 
    case PLAN_PRICE_ID = "plan_price_id";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>