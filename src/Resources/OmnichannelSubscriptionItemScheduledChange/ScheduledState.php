<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange;

class ScheduledState  { 
    /**
    *
    * @var ?string $item_id_at_source
    */
    public ?string $item_id_at_source;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_id_at_source"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_id_at_source,
    )
    { 
        $this->item_id_at_source = $item_id_at_source;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_id_at_source'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_id_at_source' => $this->item_id_at_source,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>