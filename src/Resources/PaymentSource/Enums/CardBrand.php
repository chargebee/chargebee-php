<?php

namespace Chargebee\Resources\PaymentSource\Enums;

enum CardBrand : string { 
    case VISA = "visa";
    case MASTERCARD = "mastercard";
    case AMERICAN_EXPRESS = "american_express";
    case DISCOVER = "discover";
    case JCB = "jcb";
    case DINERS_CLUB = "diners_club";
    case OTHER = "other";
    case BANCONTACT = "bancontact";
    case CMR_FALABELLA = "cmr_falabella";
    case TARJETA_NARANJA = "tarjeta_naranja";
    case NATIVA = "nativa";
    case CENCOSUD = "cencosud";
    case CABAL = "cabal";
    case ARGENCARD = "argencard";
    case ELO = "elo";
    case HIPERCARD = "hipercard";
    case CARNET = "carnet";
    case RUPAY = "rupay";
    case MAESTRO = "maestro";
    case DANKORT = "dankort";
    case CARTES_BANCAIRES = "cartes_bancaires";
    case NOT_APPLICABLE = "not_applicable";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>