<?php

namespace Chargebee\Resources\QuotedCharge;

class InvoiceItem  { 
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?int $unit_price
    */
    public ?int $unit_price;
    
    /**
    *
    * @var ?string $unit_price_in_decimal
    */
    public ?string $unit_price_in_decimal;
    
    /**
    *
    * @var ?int $service_period_days
    */
    public ?int $service_period_days;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "quantity" , "quantity_in_decimal" , "unit_price" , "unit_price_in_decimal" , "service_period_days"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_price_id,
        ?int $quantity,
        ?string $quantity_in_decimal,
        ?int $unit_price,
        ?string $unit_price_in_decimal,
        ?int $service_period_days,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->quantity = $quantity;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->unit_price = $unit_price;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->service_period_days = $service_period_days;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['service_period_days'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['item_price_id' => $this->item_price_id,
        'quantity' => $this->quantity,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'unit_price' => $this->unit_price,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        'service_period_days' => $this->service_period_days,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>