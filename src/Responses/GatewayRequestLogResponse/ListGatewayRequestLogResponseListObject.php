<?php
namespace Chargebee\Responses\GatewayRequestLogResponse;

use Chargebee\Resources\GatewayRequestLog\GatewayRequestLog;

class ListGatewayRequestLogResponseListObject
{ 
    public GatewayRequestLog $gateway_request_log;
    public function __construct(
        GatewayRequestLog $gateway_request_log,
    ) { 
        $this->gateway_request_log = $gateway_request_log;
    }
}
