<?php

namespace Chargebee\Resources\QuotedSubscription;

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
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?int $trial_end
    */
    public ?int $trial_end;
    
    /**
    *
    * @var ?int $remaining_billing_cycles
    */
    public ?int $remaining_billing_cycles;
    
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
    * @var ?string $amount_in_decimal
    */
    public ?string $amount_in_decimal;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ProrationType $proration_type
    */
    public ?\Chargebee\ClassBasedEnums\ProrationType $proration_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "quantity" , "unit_price" , "amount" , "trial_end" , "remaining_billing_cycles" , "quantity_in_decimal" , "unit_price_in_decimal" , "amount_in_decimal"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $quantity,
        ?int $unit_price,
        ?int $amount,
        ?int $trial_end,
        ?int $remaining_billing_cycles,
        ?string $quantity_in_decimal,
        ?string $unit_price_in_decimal,
        ?string $amount_in_decimal,
        ?\Chargebee\ClassBasedEnums\ProrationType $proration_type,
    )
    { 
        $this->id = $id;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->amount = $amount;
        $this->trial_end = $trial_end;
        $this->remaining_billing_cycles = $remaining_billing_cycles;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->unit_price_in_decimal = $unit_price_in_decimal;
        $this->amount_in_decimal = $amount_in_decimal; 
        $this->proration_type = $proration_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['trial_end'] ?? null,
        $resourceAttributes['remaining_billing_cycles'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['unit_price_in_decimal'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        
        
        isset($resourceAttributes['proration_type']) ? \Chargebee\ClassBasedEnums\ProrationType::tryFromValue($resourceAttributes['proration_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'quantity' => $this->quantity,
        'unit_price' => $this->unit_price,
        'amount' => $this->amount,
        'trial_end' => $this->trial_end,
        'remaining_billing_cycles' => $this->remaining_billing_cycles,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'unit_price_in_decimal' => $this->unit_price_in_decimal,
        'amount_in_decimal' => $this->amount_in_decimal,
        
        'proration_type' => $this->proration_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>