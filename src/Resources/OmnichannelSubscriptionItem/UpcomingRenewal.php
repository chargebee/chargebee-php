<?php

namespace Chargebee\Resources\OmnichannelSubscriptionItem;

class UpcomingRenewal  { 
    /**
    *
    * @var ?string $price_currency
    */
    public ?string $price_currency;
    
    /**
    *
    * @var ?int $price_units
    */
    public ?int $price_units;
    
    /**
    *
    * @var ?int $price_nanos
    */
    public ?int $price_nanos;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "price_currency" , "price_units" , "price_nanos"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $price_currency,
        ?int $price_units,
        ?int $price_nanos,
    )
    { 
        $this->price_currency = $price_currency;
        $this->price_units = $price_units;
        $this->price_nanos = $price_nanos;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['price_currency'] ?? null,
        $resourceAttributes['price_units'] ?? null,
        $resourceAttributes['price_nanos'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['price_currency' => $this->price_currency,
        'price_units' => $this->price_units,
        'price_nanos' => $this->price_nanos,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>