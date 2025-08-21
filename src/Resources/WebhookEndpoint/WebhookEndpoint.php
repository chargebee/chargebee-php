<?php

namespace Chargebee\Resources\WebhookEndpoint;

class WebhookEndpoint  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?bool $send_card_resource
    */
    public ?bool $send_card_resource;
    
    /**
    *
    * @var ?bool $disabled
    */
    public ?bool $disabled;
    
    /**
    *
    * @var ?bool $primary_url
    */
    public ?bool $primary_url;
    
    /**
    *
    * @var ?\Chargebee\Enums\ChargebeeResponseSchemaType $chargebee_response_schema_type
    */
    public ?\Chargebee\Enums\ChargebeeResponseSchemaType $chargebee_response_schema_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\WebhookEndpoint\Enums\ApiVersion $api_version
    */
    public ?\Chargebee\Resources\WebhookEndpoint\Enums\ApiVersion $api_version;
    
    /**
    *
    * @var array<\Chargebee\Enums\EventType>
    */
    public  array $enabled_events;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "url" , "send_card_resource" , "disabled" , "primary_url"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $url,
        ?bool $send_card_resource,
        ?bool $disabled,
        ?bool $primary_url,
        ?\Chargebee\Enums\ChargebeeResponseSchemaType $chargebee_response_schema_type,
        ?\Chargebee\Resources\WebhookEndpoint\Enums\ApiVersion $api_version,
        ?array $enabled_events,
        
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->url = $url;
        $this->send_card_resource = $send_card_resource;
        $this->disabled = $disabled;
        $this->primary_url = $primary_url; 
        $this->chargebee_response_schema_type = $chargebee_response_schema_type; 
        $this->api_version = $api_version; 
        $this->enabled_events = $enabled_events;
        
    }

    public static function from(array $resourceAttributes): self
    { 
        $enabledEvents  = [];
        if (!empty($resourceAttributes['enabled_events']) && is_array($resourceAttributes['enabled_events'])) {
            foreach ($resourceAttributes['enabled_events'] as $enumValue) {
                $enabledEvents[] = \Chargebee\Enums\EventType::tryFromValue($enumValue);
            }
        }
    
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['url'] ?? null,
        $resourceAttributes['send_card_resource'] ?? null,
        $resourceAttributes['disabled'] ?? null,
        $resourceAttributes['primary_url'] ?? null,
        
        
        isset($resourceAttributes['chargebee_response_schema_type']) ? \Chargebee\Enums\ChargebeeResponseSchemaType::tryFromValue($resourceAttributes['chargebee_response_schema_type']) : null,
         
        isset($resourceAttributes['api_version']) ? \Chargebee\Resources\WebhookEndpoint\Enums\ApiVersion::tryFromValue($resourceAttributes['api_version']) : null,
         
            $enabledEvents,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $enabledEvents = [];
        foreach ($this->enabled_events as $enumValue) {
            if ($enumValue instanceof \Chargebee\Enums\EventType) {
                $enabledEvents[] = $enumValue->value;
            }
        }
        
        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'url' => $this->url,
        'send_card_resource' => $this->send_card_resource,
        'disabled' => $this->disabled,
        'primary_url' => $this->primary_url,
        
        'chargebee_response_schema_type' => $this->chargebee_response_schema_type?->value,
        
        'api_version' => $this->api_version?->value,
        
        'enabled_events' => $enabledEvents,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>