<?php

namespace Chargebee\Enums;

enum EntityCode : string { 
    case A = "a";
    case B = "b";
    case C = "c";
    case D = "d";
    case E = "e";
    case F = "f";
    case G = "g";
    case H = "h";
    case I = "i";
    case J = "j";
    case K = "k";
    case L = "l";
    case M = "m";
    case N = "n";
    case P = "p";
    case Q = "q";
    case R = "r";
    case MED1 = "med1";
    case MED2 = "med2";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>