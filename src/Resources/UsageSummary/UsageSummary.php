<?php

namespace Chargebee\Resources\UsageSummary;

class UsageSummary  { 
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $feature_id
    */
    public ?string $feature_id;
    
    /**
    *
    * @var ?string $aggregated_value
    */
    public ?string $aggregated_value;
    
    /**
    *
    * @var ?int $aggregated_from
    */
    public ?int $aggregated_from;
    
    /**
    *
    * @var ?int $aggregated_to
    */
    public ?int $aggregated_to;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "subscription_id" , "feature_id" , "aggregated_value" , "aggregated_from" , "aggregated_to"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $subscription_id,
        ?string $feature_id,
        ?string $aggregated_value,
        ?int $aggregated_from,
        ?int $aggregated_to,
    )
    { 
        $this->subscription_id = $subscription_id;
        $this->feature_id = $feature_id;
        $this->aggregated_value = $aggregated_value;
        $this->aggregated_from = $aggregated_from;
        $this->aggregated_to = $aggregated_to;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['feature_id'] ?? null,
        $resourceAttributes['aggregated_value'] ?? null,
        $resourceAttributes['aggregated_from'] ?? null,
        $resourceAttributes['aggregated_to'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['subscription_id' => $this->subscription_id,
        'feature_id' => $this->feature_id,
        'aggregated_value' => $this->aggregated_value,
        'aggregated_from' => $this->aggregated_from,
        'aggregated_to' => $this->aggregated_to,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>