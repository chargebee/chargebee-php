<?php

namespace Chargebee\Resources\PaymentReferenceNumber\ClassBasedEnums;

final class Type { 
    const KID = "kid";
    const OCR = "ocr";
    const FRN = "frn";
    const FIK = "fik";
    const SWISS_REFERENCE = "swiss_reference";
    const UNKNOWN = "unknown";

    private static array $choices = [ "kid","ocr","frn","fik","swiss_reference", ];
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
