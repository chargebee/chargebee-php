<?php

namespace Chargebee\Resources\QuotedRamp;

class ItemTier  { 
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?int $starting_unit
    */
    public ?int $starting_unit;
    
    /**
    *
    * @var ?int $ending_unit
    */
    public ?int $ending_unit;
    
    /**
    *
    * @var ?int $price
    */
    public ?int $price;
    
    /**
    *
    * @var ?string $starting_unit_in_decimal
    */
    public ?string $starting_unit_in_decimal;
    
    /**
    *
    * @var ?string $ending_unit_in_decimal
    */
    public ?string $ending_unit_in_decimal;
    
    /**
    *
    * @var ?string $price_in_decimal
    */
    public ?string $price_in_decimal;
    
    /**
    *
    * @var ?string $ramp_tier_id
    */
    public ?string $ramp_tier_id;
    
    /**
    *
    * @var ?string $pricing_type
    */
    public ?string $pricing_type;
    
    /**
    *
    * @var ?int $package_size
    */
    public ?int $package_size;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "starting_unit" , "ending_unit" , "price" , "starting_unit_in_decimal" , "ending_unit_in_decimal" , "price_in_decimal" , "ramp_tier_id" , "pricing_type" , "package_size"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_price_id,
        ?int $starting_unit,
        ?int $ending_unit,
        ?int $price,
        ?string $starting_unit_in_decimal,
        ?string $ending_unit_in_decimal,
        ?string $price_in_decimal,
        ?string $ramp_tier_id,
        ?string $pricing_type,
        ?int $package_size,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->starting_unit = $starting_unit;
        $this->ending_unit = $ending_unit;
        $this->price = $price;
        $this->starting_unit_in_decimal = $starting_unit_in_decimal;
        $this->ending_unit_in_decimal = $ending_unit_in_decimal;
        $this->price_in_decimal = $price_in_decimal;
        $this->ramp_tier_id = $ramp_tier_id;
        $this->pricing_type = $pricing_type;
        $this->package_size = $package_size;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['starting_unit'] ?? null,
        $resourceAttributes['ending_unit'] ?? null,
        $resourceAttributes['price'] ?? null,
        $resourceAttributes['starting_unit_in_decimal'] ?? null,
        $resourceAttributes['ending_unit_in_decimal'] ?? null,
        $resourceAttributes['price_in_decimal'] ?? null,
        $resourceAttributes['ramp_tier_id'] ?? null,
        $resourceAttributes['pricing_type'] ?? null,
        $resourceAttributes['package_size'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_price_id' => $this->item_price_id,
        'starting_unit' => $this->starting_unit,
        'ending_unit' => $this->ending_unit,
        'price' => $this->price,
        'starting_unit_in_decimal' => $this->starting_unit_in_decimal,
        'ending_unit_in_decimal' => $this->ending_unit_in_decimal,
        'price_in_decimal' => $this->price_in_decimal,
        'ramp_tier_id' => $this->ramp_tier_id,
        'pricing_type' => $this->pricing_type,
        'package_size' => $this->package_size,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>