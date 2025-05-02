<?php

namespace Chargebee\Resources\Event;

use Chargebee\Resources\Content\Content;
class Event  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $occurred_at
    */
    public ?int $occurred_at;
    
    /**
    *
    * @var ?string $user
    */
    public ?string $user;
    
    /**
    *
    * @var ?string $webhook_failure_reason
    */
    public ?string $webhook_failure_reason;
    
    /**
    *
    * @var ?array<Webhook> $webhooks
    */
    public ?array $webhooks;
    
    /**
    *
    * @var ?Content $content
    */
    public ?Content $content;
    
    /**
    *
    * @var ?string $origin_user
    */
    public ?string $origin_user;
    
    /**
    *
    * @var ?\Chargebee\Enums\Source $source
    */
    public ?\Chargebee\Enums\Source $source;
    
    /**
    *
    * @var ?\Chargebee\Enums\EventType $event_type
    */
    public ?\Chargebee\Enums\EventType $event_type;
    
    /**
    *
    * @var ?\Chargebee\Enums\ApiVersion $api_version
    */
    public ?\Chargebee\Enums\ApiVersion $api_version;
    
    /**
    *
    * @var ?\Chargebee\Resources\Event\Enums\WebhookStatus $webhook_status
    */
    public ?\Chargebee\Resources\Event\Enums\WebhookStatus $webhook_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "occurred_at" , "user" , "webhook_failure_reason" , "webhooks" , "content" , "origin_user"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $occurred_at,
        ?string $user,
        ?string $webhook_failure_reason,
        ?array $webhooks,
        ?Content $content,
        ?string $origin_user,
        ?\Chargebee\Enums\Source $source,
        ?\Chargebee\Enums\EventType $event_type,
        ?\Chargebee\Enums\ApiVersion $api_version,
        ?\Chargebee\Resources\Event\Enums\WebhookStatus $webhook_status,
    )
    { 
        $this->id = $id;
        $this->occurred_at = $occurred_at;
        $this->user = $user;
        $this->webhook_failure_reason = $webhook_failure_reason;
        $this->webhooks = $webhooks;
        $this->content = $content;
        $this->origin_user = $origin_user; 
        $this->source = $source;
        $this->event_type = $event_type;
        $this->api_version = $api_version; 
        $this->webhook_status = $webhook_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $webhooks = array_map(fn (array $result): Webhook =>  Webhook::from(
            $result
        ), $resourceAttributes['webhooks'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['occurred_at'] ?? null,
        $resourceAttributes['user'] ?? null,
        $resourceAttributes['webhook_failure_reason'] ?? null,
        $webhooks,
        isset($resourceAttributes['content']) ? Content::from($resourceAttributes['content']) : null,
        $resourceAttributes['origin_user'] ?? null,
        
        
        isset($resourceAttributes['source']) ? \Chargebee\Enums\Source::tryFromValue($resourceAttributes['source']) : null,
        
        isset($resourceAttributes['event_type']) ? \Chargebee\Enums\EventType::tryFromValue($resourceAttributes['event_type']) : null,
        
        isset($resourceAttributes['api_version']) ? \Chargebee\Enums\ApiVersion::tryFromValue($resourceAttributes['api_version']) : null,
         
        isset($resourceAttributes['webhook_status']) ? \Chargebee\Resources\Event\Enums\WebhookStatus::tryFromValue($resourceAttributes['webhook_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'occurred_at' => $this->occurred_at,
        'user' => $this->user,
        'webhook_failure_reason' => $this->webhook_failure_reason,
        
        
        'origin_user' => $this->origin_user,
        
        'source' => $this->source?->value,
        
        'event_type' => $this->event_type?->value,
        
        'api_version' => $this->api_version?->value,
        
        'webhook_status' => $this->webhook_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->content instanceof Content){
            $data['content'] = $this->content->toArray();
        }
        
        if($this->webhooks !== []){
            $data['webhooks'] = array_map(
                fn (Webhook $webhooks): array => $webhooks->toArray(),
                $this->webhooks
            );
        }

        
        return $data;
    }
}
?>