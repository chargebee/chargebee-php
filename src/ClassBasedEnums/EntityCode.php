<?php

namespace Chargebee\ClassBasedEnums;

final class EntityCode { 
    const A = "a";
    const B = "b";
    const C = "c";
    const D = "d";
    const E = "e";
    const F = "f";
    const G = "g";
    const H = "h";
    const I = "i";
    const J = "j";
    const K = "k";
    const L = "l";
    const M = "m";
    const N = "n";
    const P = "p";
    const Q = "q";
    const R = "r";
    const MED1 = "med1";
    const MED2 = "med2";
    const UNKNOWN = "unknown";

    private static array $choices = [ "a","b","c","d","e","f","g","h","i","j","k","l","m","n","p","q","r","med1","med2", ];
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
