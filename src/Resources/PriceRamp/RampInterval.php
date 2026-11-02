<?php

namespace Chargebee\Resources\PriceRamp;

class RampInterval  { 
    /**
    *
    * @var ?int $starting_billing_cycle
    */
    public ?int $starting_billing_cycle;
    
    /**
    *
    * @var ?int $ending_billing_cycle
    */
    public ?int $ending_billing_cycle;
    
    /**
    *
    * @var ?bool $apply_catalog_price
    */
    public ?bool $apply_catalog_price;
    
    /**
    *
    * @var ?int $price
    */
    public ?int $price;
    
    /**
    *
    * @var ?string $price_in_decimal
    */
    public ?string $price_in_decimal;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "starting_billing_cycle" , "ending_billing_cycle" , "apply_catalog_price" , "price" , "price_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $starting_billing_cycle,
        ?int $ending_billing_cycle,
        ?bool $apply_catalog_price,
        ?int $price,
        ?string $price_in_decimal,
    )
    { 
        $this->starting_billing_cycle = $starting_billing_cycle;
        $this->ending_billing_cycle = $ending_billing_cycle;
        $this->apply_catalog_price = $apply_catalog_price;
        $this->price = $price;
        $this->price_in_decimal = $price_in_decimal;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['starting_billing_cycle'] ?? null,
        $resourceAttributes['ending_billing_cycle'] ?? null,
        $resourceAttributes['apply_catalog_price'] ?? null,
        $resourceAttributes['price'] ?? null,
        $resourceAttributes['price_in_decimal'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['starting_billing_cycle' => $this->starting_billing_cycle,
        'ending_billing_cycle' => $this->ending_billing_cycle,
        'apply_catalog_price' => $this->apply_catalog_price,
        'price' => $this->price,
        'price_in_decimal' => $this->price_in_decimal,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>