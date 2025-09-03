<?php
namespace Chargebee\Responses\WebhookEndpointResponse;

use Chargebee\Resources\WebhookEndpoint\WebhookEndpoint;

class ListWebhookEndpointResponseListObject
{ 
    public WebhookEndpoint $webhook_endpoint;
    public function __construct(
        WebhookEndpoint $webhook_endpoint,
    ) { 
        $this->webhook_endpoint = $webhook_endpoint;
    }
}
