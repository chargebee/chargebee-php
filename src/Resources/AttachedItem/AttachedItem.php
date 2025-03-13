<?php

namespace Chargebee\Resources\AttachedItem;

class AttachedItem  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var string $parent_item_id
    */
    public string $parent_item_id;
    
    /**
    *
    * @var string $item_id
    */
    public string $item_id;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?int $billing_cycles
    */
    public ?int $billing_cycles;
    
    /**
    *
    * @var bool $charge_once
    */
    public bool $charge_once;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var bool $deleted
    */
    public bool $deleted;
    
    /**
    *
    * @var \Chargebee\Enums\ChargeOnEvent $charge_on_event
    */
    public \Chargebee\Enums\ChargeOnEvent $charge_on_event;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var \Chargebee\Resources\AttachedItem\Enums\Type $type
    */
    public \Chargebee\Resources\AttachedItem\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\AttachedItem\Enums\Status $status
    */
    public ?\Chargebee\Resources\AttachedItem\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "parent_item_id" , "item_id" , "quantity" , "quantity_in_decimal" , "billing_cycles" , "charge_once" , "created_at" , "resource_version" , "updated_at" , "business_entity_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $parent_item_id,
        string $item_id,
        ?int $quantity,
        ?string $quantity_in_decimal,
        ?int $billing_cycles,
        bool $charge_once,
        int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?string $business_entity_id,
        bool $deleted,
        \Chargebee\Enums\ChargeOnEvent $charge_on_event,
        ?\Chargebee\Enums\Channel $channel,
        \Chargebee\Resources\AttachedItem\Enums\Type $type,
        ?\Chargebee\Resources\AttachedItem\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->parent_item_id = $parent_item_id;
        $this->item_id = $item_id;
        $this->quantity = $quantity;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->billing_cycles = $billing_cycles;
        $this->charge_once = $charge_once;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->business_entity_id = $business_entity_id;
        $this->deleted = $deleted; 
        $this->charge_on_event = $charge_on_event;
        $this->channel = $channel; 
        $this->type = $type;
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['parent_item_id'] ,
        $resourceAttributes['item_id'] ,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['charge_once'] ,
        $resourceAttributes['created_at'] ,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['deleted'] ,
        
        
        isset($resourceAttributes['charge_on_event']) ? \Chargebee\Enums\ChargeOnEvent::tryFromValue($resourceAttributes['charge_on_event']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\AttachedItem\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\AttachedItem\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'parent_item_id' => $this->parent_item_id,
        'item_id' => $this->item_id,
        'quantity' => $this->quantity,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'billing_cycles' => $this->billing_cycles,
        'charge_once' => $this->charge_once,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'business_entity_id' => $this->business_entity_id,
        'deleted' => $this->deleted,
        
        'charge_on_event' => $this->charge_on_event?->value,
        
        'channel' => $this->channel?->value,
        
        'type' => $this->type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>