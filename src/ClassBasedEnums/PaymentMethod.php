<?php

namespace Chargebee\ClassBasedEnums;

final class PaymentMethod { 
    const CASH = "cash";
    const CHECK = "check";
    const BANK_TRANSFER = "bank_transfer";
    const OTHER = "other";
    const CUSTOM = "custom";
    const CHARGEBACK = "chargeback";
    const CARD = "card";
    const AMAZON_PAYMENTS = "amazon_payments";
    const PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    const DIRECT_DEBIT = "direct_debit";
    const ALIPAY = "alipay";
    const UNIONPAY = "unionpay";
    const APPLE_PAY = "apple_pay";
    const WECHAT_PAY = "wechat_pay";
    const ACH_CREDIT = "ach_credit";
    const SEPA_CREDIT = "sepa_credit";
    const IDEAL = "ideal";
    const GOOGLE_PAY = "google_pay";
    const SOFORT = "sofort";
    const BANCONTACT = "bancontact";
    const GIROPAY = "giropay";
    const DOTPAY = "dotpay";
    const UPI = "upi";
    const NETBANKING_EMANDATES = "netbanking_emandates";
    const BOLETO = "boleto";
    const VENMO = "venmo";
    const PAY_TO = "pay_to";
    const FASTER_PAYMENTS = "faster_payments";
    const SEPA_INSTANT_TRANSFER = "sepa_instant_transfer";
    const AUTOMATED_BANK_TRANSFER = "automated_bank_transfer";
    const KLARNA_PAY_NOW = "klarna_pay_now";
    const ONLINE_BANKING_POLAND = "online_banking_poland";
    const PAYCONIQ_BY_BANCONTACT = "payconiq_by_bancontact";
    /*
    * @depcreated
    */
    const app_store = "app_store";
    /*
    * @depcreated
    */
    const play_store = "play_store";
    const UNKNOWN = "unknown";

    private static array $choices = [ "cash","check","bank_transfer","other","custom","chargeback","card","amazon_payments","paypal_express_checkout","direct_debit","alipay","unionpay","apple_pay","wechat_pay","ach_credit","sepa_credit","ideal","google_pay","sofort","bancontact","giropay","dotpay","upi","netbanking_emandates","boleto","venmo","pay_to","faster_payments","sepa_instant_transfer","automated_bank_transfer","klarna_pay_now","online_banking_poland","payconiq_by_bancontact", ];
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
