<?php

namespace Chargebee\Resources\PersonalizedOffer\Enums;

enum OptionProcessingLayout : string { 
    case IN_APP = "in_app";
    case FULL_PAGE = "full_page";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>