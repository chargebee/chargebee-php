<?php

namespace Chargebee\Resources\QuotedCharge;

class Addon  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?int $unit_price
    */
    public ?int $unit_price;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?string $unit_price_in_decimal
    */
    public ?string $unit_price_in_decimal;
    
    /**
    *
    * @var ?string $proration_type
    */
    public ?string $proration_type;
    
    /**
    *
    * @var ?int $service_period
    */
    public ?int $service_period;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "unit_price" , "quantity_in_decimal" , "unit_price_in_decimal" , "proration_type" , "service_period"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        ?int $quantity,
        ?int $unit_price,
        ?string $quantity_in_decimal,
        ?string $unit_price_in_decimal,
        ?string $proration_type,
        ?int $service_period,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->proration_type = $proration_type;
        $this->service_period = $service_period;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['proration_type'] ?? null,
        $resourceAttributes['service_period'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'unit_price' => $this->unit_price,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        'proration_type' => $this->proration_type,
        'service_period' => $this->service_period,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>