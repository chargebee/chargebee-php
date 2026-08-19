<?php
namespace Chargebee\Responses\PaymentSourceResponse;

use Chargebee\Resources\GatewayPaymentMethodToken\GatewayPaymentMethodToken;

class ListGatewayTokensForPaymentSourcePaymentSourceResponseListObject
{ 
    public GatewayPaymentMethodToken $gateway_payment_method_token;
    public function __construct(
        GatewayPaymentMethodToken $gateway_payment_method_token,
    ) { 
        $this->gateway_payment_method_token = $gateway_payment_method_token;
    }
}
