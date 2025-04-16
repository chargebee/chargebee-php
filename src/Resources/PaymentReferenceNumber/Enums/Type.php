<?php

namespace Chargebee\Resources\PaymentReferenceNumber\Enums;

enum Type : string { 
    case KID = "kid";
    case OCR = "ocr";
    case FRN = "frn";
    case FIK = "fik";
    case SWISS_REFERENCE = "swiss_reference";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>