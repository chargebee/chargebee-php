<?php

namespace Chargebee\Resources\Ramp;

class DiscountsToAdd  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $invoice_name
    */
    public ?string $invoice_name;
    
    /**
    *
    * @var ?string $type
    */
    public ?string $type;
    
    /**
    *
    * @var ?float $percentage
    */
    public ?float $percentage;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $duration_type
    */
    public ?string $duration_type;
    
    /**
    *
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var ?string $period_unit
    */
    public ?string $period_unit;
    
    /**
    *
    * @var ?bool $included_in_mrr
    */
    public ?bool $included_in_mrr;
    
    /**
    *
    * @var ?string $apply_on
    */
    public ?string $apply_on;
    
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_name" , "type" , "percentage" , "amount" , "duration_type" , "period" , "period_unit" , "included_in_mrr" , "apply_on" , "item_price_id" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $invoice_name,
        ?string $type,
        ?float $percentage,
        ?int $amount,
        ?string $duration_type,
        ?int $period,
        ?string $period_unit,
        ?bool $included_in_mrr,
        ?string $apply_on,
        ?string $item_price_id,
        ?int $created_at,
    )
    { 
        $this->id = $id;
        $this->invoice_name = $invoice_name;
        $this->type = $type;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->duration_type = $duration_type;
        $this->period = $period;
        $this->period_unit = $period_unit;
        $this->included_in_mrr = $included_in_mrr;
        $this->apply_on = $apply_on;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['duration_type'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['period_unit'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['apply_on'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'invoice_name' => $this->invoice_name,
        'type' => $this->type,
        'percentage' => $this->percentage,
        'amount' => $this->amount,
        'duration_type' => $this->duration_type,
        'period' => $this->period,
        'period_unit' => $this->period_unit,
        'included_in_mrr' => $this->included_in_mrr,
        'apply_on' => $this->apply_on,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>