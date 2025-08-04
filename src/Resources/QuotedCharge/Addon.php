<?php

namespace Chargebee\Resources\QuotedCharge;

class Addon  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?int $service_period
    */
    public ?int $service_period;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ProrationType $proration_type
    */
    public ?\Chargebee\ClassBasedEnums\ProrationType $proration_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "unit_price" , "quantity_in_decimal" , "unit_price_in_decimal" , "service_period"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $quantity,
        ?int $unit_price,
        ?string $quantity_in_decimal,
        ?string $unit_price_in_decimal,
        ?int $service_period,
        ?\Chargebee\ClassBasedEnums\ProrationType $proration_type,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->service_period = $service_period; 
        $this->proration_type = $proration_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['service_period'] ?? null,
        
        
        isset($resourceAttributes['proration_type']) ? \Chargebee\ClassBasedEnums\ProrationType::tryFromValue($resourceAttributes['proration_type']) : null,
         
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
        'service_period' => $this->service_period,
        
        'proration_type' => $this->proration_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>