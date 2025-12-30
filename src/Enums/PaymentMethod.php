<?php

namespace Chargebee\Enums;

enum PaymentMethod : string { 
    case CASH = "cash";
    case CHECK = "check";
    case BANK_TRANSFER = "bank_transfer";
    case OTHER = "other";
    case CUSTOM = "custom";
    case CHARGEBACK = "chargeback";
    case CARD = "card";
    case AMAZON_PAYMENTS = "amazon_payments";
    case PAYPAL_EXPRESS_CHECKOUT = "paypal_express_checkout";
    case DIRECT_DEBIT = "direct_debit";
    case ALIPAY = "alipay";
    case UNIONPAY = "unionpay";
    case APPLE_PAY = "apple_pay";
    case WECHAT_PAY = "wechat_pay";
    case ACH_CREDIT = "ach_credit";
    case SEPA_CREDIT = "sepa_credit";
    case IDEAL = "ideal";
    case GOOGLE_PAY = "google_pay";
    case SOFORT = "sofort";
    case BANCONTACT = "bancontact";
    case GIROPAY = "giropay";
    case DOTPAY = "dotpay";
    case UPI = "upi";
    case NETBANKING_EMANDATES = "netbanking_emandates";
    case BOLETO = "boleto";
    case VENMO = "venmo";
    case PAY_TO = "pay_to";
    case FASTER_PAYMENTS = "faster_payments";
    case SEPA_INSTANT_TRANSFER = "sepa_instant_transfer";
    case AUTOMATED_BANK_TRANSFER = "automated_bank_transfer";
    case KLARNA_PAY_NOW = "klarna_pay_now";
    case ONLINE_BANKING_POLAND = "online_banking_poland";
    case PAYCONIQ_BY_BANCONTACT = "payconiq_by_bancontact";
    case ELECTRONIC_PAYMENT_STANDARD = "electronic_payment_standard";
    case KBC_PAYMENT_BUTTON = "kbc_payment_button";
    case PAY_BY_BANK = "pay_by_bank";
    case TRUSTLY = "trustly";
    case STABLECOIN = "stablecoin";
    /*
    * @depcreated
    */
    case APP_STORE = "app_store";
    /*
    * @depcreated
    */
    case PLAY_STORE = "play_store";
    case UNKNOWN = "unknown";

    public static function tryFromValue(string $value): self {
        return self::tryFrom($value) ?? self::UNKNOWN;
    }
}
?>