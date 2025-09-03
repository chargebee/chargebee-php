<?php

namespace Chargebee\Responses\WebhookEndpointResponse;
use Chargebee\Resources\WebhookEndpoint\WebhookEndpoint;

use Chargebee\ValueObjects\ResponseBase;

class ListWebhookEndpointResponse extends ResponseBase { 
    /**
    *
    * @var array<ListWebhookEndpointResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListWebhookEndpointResponseListObject {
                return new ListWebhookEndpointResponseListObject(
                    isset($result['webhook_endpoint']) ? WebhookEndpoint::from($result['webhook_endpoint']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}
?>