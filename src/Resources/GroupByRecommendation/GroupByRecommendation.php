<?php

namespace Chargebee\Resources\GroupByRecommendation;

class GroupByRecommendation  { 
    /**
    *
    * @var ?string $attribute_name
    */
    public ?string $attribute_name;
    
    /**
    *
    * @var ?int $rank
    */
    public ?int $rank;
    
    /**
    *
    * @var ?string $reason
    */
    public ?string $reason;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "attribute_name" , "rank" , "reason"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $attribute_name,
        ?int $rank,
        ?string $reason,
    )
    { 
        $this->attribute_name = $attribute_name;
        $this->rank = $rank;
        $this->reason = $reason;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['attribute_name'] ?? null,
        $resourceAttributes['rank'] ?? null,
        $resourceAttributes['reason'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['attribute_name' => $this->attribute_name,
        'rank' => $this->rank,
        'reason' => $this->reason,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>