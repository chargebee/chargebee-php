<?php

namespace Chargebee\Resources\PaymentIntent\ClassBasedEnums;

final class PaymentMethodType { 
    const CARD = "card";
    const IDEAL = "ideal";
    const SOFORT = "sofort";
    const BANCONTACT = "bancontact";
    const GOOGLE_PAY = "google_pay";
    const DOTPAY = "dotpay";
    const GIROPAY = "giropay";
    const APPLE_PAY = "apple_pay";
    const UPI = "upi";
    const NETBANKING_EMANDATES = "netbanking_emandates";
    const PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    const DIRECT_DEBIT = "direct_debit";
    const BOLETO = "boleto";
    const VENMO = "venmo";
    const AMAZON_PAYMENTS = "amazon_payments";
    const PAY_TO = "pay_to";
    const FASTER_PAYMENTS = "faster_payments";
    const SEPA_INSTANT_TRANSFER = "sepa_instant_transfer";
    const KLARNA_PAY_NOW = "klarna_pay_now";
    const ONLINE_BANKING_POLAND = "online_banking_poland";
    const PAYCONIQ_BY_BANCONTACT = "payconiq_by_bancontact";
    const UNKNOWN = "unknown";

    private static array $choices = [ "card","ideal","sofort","bancontact","google_pay","dotpay","giropay","apple_pay","upi","netbanking_emandates","paypal_express_checkout","direct_debit","boleto","venmo","amazon_payments","pay_to","faster_payments","sepa_instant_transfer","klarna_pay_now","online_banking_poland","payconiq_by_bancontact", ];
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
