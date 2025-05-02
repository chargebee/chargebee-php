<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange;

class OmnichannelSubscriptionItemScheduledChange  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $omnichannel_subscription_item_id
    */
    public ?string $omnichannel_subscription_item_id;
    
    /**
    *
    * @var ?int $scheduled_at
    */
    public ?int $scheduled_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?CurrentState $current_state
    */
    public ?CurrentState $current_state;
    
    /**
    *
    * @var ?ScheduledState $scheduled_state
    */
    public ?ScheduledState $scheduled_state;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\Enums\ChangeType $change_type
    */
    public ?\Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\Enums\ChangeType $change_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "omnichannel_subscription_item_id" , "scheduled_at" , "created_at" , "modified_at" , "resource_version" , "current_state" , "scheduled_state"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $omnichannel_subscription_item_id,
        ?int $scheduled_at,
        ?int $created_at,
        ?int $modified_at,
        ?int $resource_version,
        ?CurrentState $current_state,
        ?ScheduledState $scheduled_state,
        ?\Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\Enums\ChangeType $change_type,
    )
    { 
        $this->id = $id;
        $this->omnichannel_subscription_item_id = $omnichannel_subscription_item_id;
        $this->scheduled_at = $scheduled_at;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->resource_version = $resource_version;
        $this->current_state = $current_state;
        $this->scheduled_state = $scheduled_state;  
        $this->change_type = $change_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['omnichannel_subscription_item_id'] ?? null,
        $resourceAttributes['scheduled_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        isset($resourceAttributes['current_state']) ? CurrentState::from($resourceAttributes['current_state']) : null,
        isset($resourceAttributes['scheduled_state']) ? ScheduledState::from($resourceAttributes['scheduled_state']) : null,
        
         
        isset($resourceAttributes['change_type']) ? \Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\Enums\ChangeType::tryFromValue($resourceAttributes['change_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'omnichannel_subscription_item_id' => $this->omnichannel_subscription_item_id,
        'scheduled_at' => $this->scheduled_at,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'resource_version' => $this->resource_version,
        
        
        
        'change_type' => $this->change_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->current_state instanceof CurrentState){
            $data['current_state'] = $this->current_state->toArray();
        }
        if($this->scheduled_state instanceof ScheduledState){
            $data['scheduled_state'] = $this->scheduled_state->toArray();
        }
        

        
        return $data;
    }
}
?>