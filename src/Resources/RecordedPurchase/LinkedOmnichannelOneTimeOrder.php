<?php

namespace Chargebee\Resources\RecordedPurchase;

class LinkedOmnichannelOneTimeOrder  { 
    /**
    *
    * @var ?string $omnichannel_one_time_order_id
    */
    public ?string $omnichannel_one_time_order_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "omnichannel_one_time_order_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $omnichannel_one_time_order_id,
    )
    { 
        $this->omnichannel_one_time_order_id = $omnichannel_one_time_order_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['omnichannel_one_time_order_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['omnichannel_one_time_order_id' => $this->omnichannel_one_time_order_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>