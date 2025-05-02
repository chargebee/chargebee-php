<?php

namespace Chargebee\Resources\ItemEntitlement;

class ItemEntitlement  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $item_id
    */
    public ?string $item_id;
    
    /**
    *
    * @var ?string $feature_id
    */
    public ?string $feature_id;
    
    /**
    *
    * @var ?string $feature_name
    */
    public ?string $feature_name;
    
    /**
    *
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemEntitlement\Enums\ItemType $item_type
    */
    public ?\Chargebee\Resources\ItemEntitlement\Enums\ItemType $item_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "item_id" , "feature_id" , "feature_name" , "value" , "name"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $item_id,
        ?string $feature_id,
        ?string $feature_name,
        ?string $value,
        ?string $name,
        ?\Chargebee\Resources\ItemEntitlement\Enums\ItemType $item_type,
    )
    { 
        $this->id = $id;
        $this->item_id = $item_id;
        $this->feature_id = $feature_id;
        $this->feature_name = $feature_name;
        $this->value = $value;
        $this->name = $name;  
        $this->item_type = $item_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['item_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['feature_name'] ?? null,
        $resourceAttributes['value'] ?? null,
        $resourceAttributes['name'] ?? null,
        
         
        isset($resourceAttributes['item_type']) ? \Chargebee\Resources\ItemEntitlement\Enums\ItemType::tryFromValue($resourceAttributes['item_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'item_id' => $this->item_id,
        'feature_id' => $this->feature_id,
        'feature_name' => $this->feature_name,
        'value' => $this->value,
        'name' => $this->name,
        
        'item_type' => $this->item_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>