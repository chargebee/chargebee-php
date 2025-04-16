<?php

namespace Chargebee\Resources\Subscription;

class ItemTier  { 
    /**
    *
    * @var string $item_price_id
    */
    public string $item_price_id;
    
    /**
    *
    * @var int $starting_unit
    */
    public int $starting_unit;
    
    /**
    *
    * @var ?int $ending_unit
    */
    public ?int $ending_unit;
    
    /**
    *
    * @var int $price
    */
    public int $price;
    
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
    * @var int $index
    */
    public int $index;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "starting_unit" , "ending_unit" , "price" , "starting_unit_in_decimal" , "ending_unit_in_decimal" , "price_in_decimal" , "index"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $item_price_id,
        int $starting_unit,
        ?int $ending_unit,
        int $price,
        ?string $starting_unit_in_decimal,
        ?string $ending_unit_in_decimal,
        ?string $price_in_decimal,
        int $index,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->starting_unit = $starting_unit;
        $this->ending_unit = $ending_unit;
        $this->price = $price;
        $this->starting_unit_in_decimal = $starting_unit_in_decimal;
        $this->ending_unit_in_decimal = $ending_unit_in_decimal;
        $this->price_in_decimal = $price_in_decimal;
        $this->index = $index;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ,
        $resourceAttributes['starting_unit'] ,
        $resourceAttributes['ending_unit'] ?? null,
        $resourceAttributes['price'] ,
        $resourceAttributes['starting_unit_in_decimal'] ?? null,
        $resourceAttributes['ending_unit_in_decimal'] ?? null,
        $resourceAttributes['price_in_decimal'] ?? null,
        $resourceAttributes['index'] ,
        
         
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
        'index' => $this->index,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>