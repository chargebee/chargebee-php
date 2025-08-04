<?php

namespace Chargebee\Resources\Gift;

class GiftTimeline  { 
    /**
    *
    * @var ?int $occurred_at
    */
    public ?int $occurred_at;
    
    /**
    *
    * @var ?\Chargebee\Resources\Gift\ClassBasedEnums\Status $status
    */
    public ?\Chargebee\Resources\Gift\ClassBasedEnums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "occurred_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $occurred_at,
        ?\Chargebee\Resources\Gift\ClassBasedEnums\Status $status,
    )
    { 
        $this->occurred_at = $occurred_at;  
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['occurred_at'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Gift\ClassBasedEnums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['occurred_at' => $this->occurred_at,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>