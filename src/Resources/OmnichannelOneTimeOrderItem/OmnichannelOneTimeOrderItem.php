<?php

namespace Chargebee\Resources\OmnichannelOneTimeOrderItem;

class OmnichannelOneTimeOrderItem  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $item_id_at_source
    */
    public ?string $item_id_at_source;
    
    /**
    *
    * @var ?string $item_type_at_source
    */
    public ?string $item_type_at_source;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?int $cancelled_at
    */
    public ?int $cancelled_at;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?\Chargebee\Resources\OmnichannelOneTimeOrderItem\Enums\CancellationReason $cancellation_reason
    */
    public ?\Chargebee\Resources\OmnichannelOneTimeOrderItem\Enums\CancellationReason $cancellation_reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "item_id_at_source" , "item_type_at_source" , "quantity" , "cancelled_at" , "created_at" , "resource_version"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $item_id_at_source,
        ?string $item_type_at_source,
        ?int $quantity,
        ?int $cancelled_at,
        ?int $created_at,
        ?int $resource_version,
        ?\Chargebee\Resources\OmnichannelOneTimeOrderItem\Enums\CancellationReason $cancellation_reason,
    )
    { 
        $this->id = $id;
        $this->item_id_at_source = $item_id_at_source;
        $this->item_type_at_source = $item_type_at_source;
        $this->quantity = $quantity;
        $this->cancelled_at = $cancelled_at;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;  
        $this->cancellation_reason = $cancellation_reason; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['item_id_at_source'] ?? null,
        $resourceAttributes['item_type_at_source'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['cancelled_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        
         
        isset($resourceAttributes['cancellation_reason']) ? \Chargebee\Resources\OmnichannelOneTimeOrderItem\Enums\CancellationReason::tryFromValue($resourceAttributes['cancellation_reason']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'item_id_at_source' => $this->item_id_at_source,
        'item_type_at_source' => $this->item_type_at_source,
        'quantity' => $this->quantity,
        'cancelled_at' => $this->cancelled_at,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        
        'cancellation_reason' => $this->cancellation_reason?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>