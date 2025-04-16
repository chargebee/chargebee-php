<?php

namespace Chargebee\Resources\Card\Enums;

enum PoweredBy : string { 
    case IDEAL = "ideal";
    case SOFORT = "sofort";
    case BANCONTACT = "bancontact";
    case GIROPAY = "giropay";
    case CARD = "card";
    case LATAM_LOCAL_CARD = "latam_local_card";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>