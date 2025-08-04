<?php

namespace Chargebee\Resources\Event;

class Webhook  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?\Chargebee\Resources\Event\ClassBasedEnums\WebhookWebhookStatus $webhook_status
    */
    public ?\Chargebee\Resources\Event\ClassBasedEnums\WebhookWebhookStatus $webhook_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?\Chargebee\Resources\Event\ClassBasedEnums\WebhookWebhookStatus $webhook_status,
    )
    { 
        $this->id = $id;  
        $this->webhook_status = $webhook_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        
         
        isset($resourceAttributes['webhook_status']) ? \Chargebee\Resources\Event\ClassBasedEnums\WebhookWebhookStatus::tryFromValue($resourceAttributes['webhook_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        
        'webhook_status' => $this->webhook_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>