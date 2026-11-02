<?php

namespace Chargebee\Resources\PriceRamp;

class PriceRamp  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
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
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
    /**
    *
    * @var ?array<RampInterval> $ramp_intervals
    */
    public ?array $ramp_intervals;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Resources\PriceRamp\Enums\Status $status
    */
    public ?\Chargebee\Resources\PriceRamp\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "item_price_id" , "created_at" , "resource_version" , "updated_at" , "archived_at" , "ramp_intervals" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $item_price_id,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?int $archived_at,
        ?array $ramp_intervals,
        ?string $business_entity_id,
        ?\Chargebee\Resources\PriceRamp\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->archived_at = $archived_at;
        $this->ramp_intervals = $ramp_intervals;
        $this->business_entity_id = $business_entity_id;  
        $this->status = $status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $ramp_intervals = array_map(fn (array $result): RampInterval =>  RampInterval::from(
            $result
        ), $resourceAttributes['ramp_intervals'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['archived_at'] ?? null,
        $ramp_intervals,
        $resourceAttributes['business_entity_id'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PriceRamp\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'archived_at' => $this->archived_at,
        
        'business_entity_id' => $this->business_entity_id,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->ramp_intervals !== []){
            $data['ramp_intervals'] = array_map(
                fn (RampInterval $ramp_intervals): array => $ramp_intervals->toArray(),
                $this->ramp_intervals
            );
        }

        
        return $data;
    }
}
?>