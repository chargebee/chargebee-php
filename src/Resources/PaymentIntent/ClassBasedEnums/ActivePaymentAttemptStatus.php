<?php

namespace Chargebee\Resources\PaymentIntent\ClassBasedEnums;

final class ActivePaymentAttemptStatus { 
    const INITED = "inited";
    const REQUIRES_IDENTIFICATION = "requires_identification";
    const REQUIRES_CHALLENGE = "requires_challenge";
    const REQUIRES_REDIRECTION = "requires_redirection";
    const AUTHORIZED = "authorized";
    const REFUSED = "refused";
    const PENDING_AUTHORIZATION = "pending_authorization";
    const UNKNOWN = "unknown";

    private static array $choices = [ "inited","requires_identification","requires_challenge","requires_redirection","authorized","refused","pending_authorization", ];
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
