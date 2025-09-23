<?php

namespace Chargebee\Resources\OmnichannelTransaction;

class LinkedOmnichannelSubscription  { 
    /**
    *
    * @var ?string $omnichannel_subscription_id
    */
    public ?string $omnichannel_subscription_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "omnichannel_subscription_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $omnichannel_subscription_id,
    )
    { 
        $this->omnichannel_subscription_id = $omnichannel_subscription_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['omnichannel_subscription_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['omnichannel_subscription_id' => $this->omnichannel_subscription_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>