<?php

namespace Chargebee\Responses\WebhookEndpointResponse;
use Chargebee\Resources\WebhookEndpoint\WebhookEndpoint;

use Chargebee\ValueObjects\ResponseBase;

class DeleteWebhookEndpointResponse extends ResponseBase { 
    /**
    *
    * @var ?WebhookEndpoint $webhook_endpoint
    */
    public ?WebhookEndpoint $webhook_endpoint;
    

    private function __construct(
        ?WebhookEndpoint $webhook_endpoint,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->webhook_endpoint = $webhook_endpoint;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['webhook_endpoint']) ? WebhookEndpoint::from($resourceAttributes['webhook_endpoint']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->webhook_endpoint instanceof WebhookEndpoint){
            $data['webhook_endpoint'] = $this->webhook_endpoint->toArray();
        } 

        return $data;
    }
}
?>