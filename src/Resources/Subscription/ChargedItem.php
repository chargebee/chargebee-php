<?php

namespace Chargebee\Resources\Subscription;

class ChargedItem  { 
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?int $last_charged_at
    */
    public ?int $last_charged_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "last_charged_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_price_id,
        ?int $last_charged_at,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->last_charged_at = $last_charged_at;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['last_charged_at'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_price_id' => $this->item_price_id,
        'last_charged_at' => $this->last_charged_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>