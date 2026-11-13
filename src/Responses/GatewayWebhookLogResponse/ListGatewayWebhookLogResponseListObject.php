<?php
namespace Chargebee\Responses\GatewayWebhookLogResponse;

use Chargebee\Resources\GatewayWebhookLog\GatewayWebhookLog;

class ListGatewayWebhookLogResponseListObject
{ 
    public GatewayWebhookLog $gateway_webhook_log;
    public function __construct(
        GatewayWebhookLog $gateway_webhook_log,
    ) { 
        $this->gateway_webhook_log = $gateway_webhook_log;
    }
}
