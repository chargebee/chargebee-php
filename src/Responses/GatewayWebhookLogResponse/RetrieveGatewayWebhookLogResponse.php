<?php

namespace Chargebee\Responses\GatewayWebhookLogResponse;
use Chargebee\Resources\GatewayWebhookLog\GatewayWebhookLog;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveGatewayWebhookLogResponse extends ResponseBase { 
    /**
    *
    * @var ?GatewayWebhookLog $gateway_webhook_log
    */
    public ?GatewayWebhookLog $gateway_webhook_log;
    

    private function __construct(
        ?GatewayWebhookLog $gateway_webhook_log,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->gateway_webhook_log = $gateway_webhook_log;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['gateway_webhook_log']) ? GatewayWebhookLog::from($resourceAttributes['gateway_webhook_log']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->gateway_webhook_log instanceof GatewayWebhookLog){
            $data['gateway_webhook_log'] = $this->gateway_webhook_log->toArray();
        } 

        return $data;
    }
}
?>