<?php

namespace Chargebee\Resources\Gift;

class GiftTimeline  { 
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?int $occurred_at
    */
    public ?int $occurred_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "status" , "occurred_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $status,
        ?int $occurred_at,
    )
    { 
        $this->status = $status;
        $this->occurred_at = $occurred_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['status'] ?? null,
        $resourceAttributes['occurred_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['status' => $this->status,
        'occurred_at' => $this->occurred_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>