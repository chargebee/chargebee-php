<?php

namespace Chargebee\Resources\PersonalizedOffer\Enums;

enum OptionProcessingType : string { 
    case BILLING_UPDATE = "billing_update";
    case CHECKOUT = "checkout";
    case URL_REDIRECT = "url_redirect";
    case WEBHOOK = "webhook";
    case EMAIL = "email";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>