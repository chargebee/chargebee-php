<?php

namespace Chargebee\Resources\UsageEvent;

class UsageEvent  { 
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $deduplication_id
    */
    public ?string $deduplication_id;
    
    /**
    *
    * @var ?int $usage_timestamp
    */
    public ?int $usage_timestamp;
    
    /**
    *
    * @var mixed $properties
    */
    public mixed $properties;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "subscription_id" , "deduplication_id" , "usage_timestamp" , "properties"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $subscription_id,
        ?string $deduplication_id,
        ?int $usage_timestamp,
        mixed $properties,
    )
    { 
        $this->subscription_id = $subscription_id;
        $this->deduplication_id = $deduplication_id;
        $this->usage_timestamp = $usage_timestamp;
        $this->properties = $properties;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['deduplication_id'] ?? null,
        $resourceAttributes['usage_timestamp'] ?? null,
        $resourceAttributes['properties'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['subscription_id' => $this->subscription_id,
        'deduplication_id' => $this->deduplication_id,
        'usage_timestamp' => $this->usage_timestamp,
        'properties' => $this->properties,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>