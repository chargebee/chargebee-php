<?php

namespace Chargebee\Resources\Card\ClassBasedEnums;

final class CardType { 
    const VISA = "visa";
    const MASTERCARD = "mastercard";
    const AMERICAN_EXPRESS = "american_express";
    const DISCOVER = "discover";
    const JCB = "jcb";
    const DINERS_CLUB = "diners_club";
    const BANCONTACT = "bancontact";
    const CMR_FALABELLA = "cmr_falabella";
    const TARJETA_NARANJA = "tarjeta_naranja";
    const NATIVA = "nativa";
    const CENCOSUD = "cencosud";
    const CABAL = "cabal";
    const ARGENCARD = "argencard";
    const ELO = "elo";
    const HIPERCARD = "hipercard";
    const CARNET = "carnet";
    const RUPAY = "rupay";
    const MAESTRO = "maestro";
    const DANKORT = "dankort";
    const CARTES_BANCAIRES = "cartes_bancaires";
    const OTHER = "other";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "visa","mastercard","american_express","discover","jcb","diners_club","bancontact","cmr_falabella","tarjeta_naranja","nativa","cencosud","cabal","argencard","elo","hipercard","carnet","rupay","maestro","dankort","cartes_bancaires","other","not_applicable", ];
    public final string $value;

    public static function tryFromValue(string $key): self
    {
        $instance = new self();
        $instance->value = self::isValidChoice($key) ? $key : self::UNKNOWN;

        return $instance;
    }
    public function __toString(): string
    {
        return $this->value;
    }
    private static function isValidChoice(string $key): bool
    {
        return in_array($key, self::$choices);
    }
}
?>
