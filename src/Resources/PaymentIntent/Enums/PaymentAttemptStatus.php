<?php

namespace Chargebee\Resources\PaymentIntent\Enums;

enum PaymentAttemptStatus : string { 
    case INITED = "inited";
    case REQUIRES_IDENTIFICATION = "requires_identification";
    case REQUIRES_CHALLENGE = "requires_challenge";
    case REQUIRES_REDIRECTION = "requires_redirection";
    case AUTHORIZED = "authorized";
    case REFUSED = "refused";
    case PENDING_AUTHORIZATION = "pending_authorization";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>