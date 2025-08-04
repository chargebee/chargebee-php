<?php

namespace Chargebee\Resources\Card\ClassBasedEnums;

final class PoweredBy { 
    const IDEAL = "ideal";
    const SOFORT = "sofort";
    const BANCONTACT = "bancontact";
    const GIROPAY = "giropay";
    const CARD = "card";
    const LATAM_LOCAL_CARD = "latam_local_card";
    const PAYCONIQ = "payconiq";
    const NOT_APPLICABLE = "not_applicable";
    const UNKNOWN = "unknown";

    private static array $choices = [ "ideal","sofort","bancontact","giropay","card","latam_local_card","payconiq","not_applicable", ];
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
