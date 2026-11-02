<?php

namespace Chargebee\Resources\EmailMessage\Enums;

enum AuthorType : string { 
    case CONTACT = "contact";
    case SITE_USER = "site_user";
    case AGENT = "agent";
    case OTHER = "other";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>