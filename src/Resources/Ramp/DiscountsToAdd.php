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
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var ?bool $included_in_mrr
    */
    public ?bool $included_in_mrr;
    
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
    *
    * @var ?\Chargebee\ClassBasedEnums\DurationType $duration_type
    */
    public ?\Chargebee\ClassBasedEnums\DurationType $duration_type;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\PeriodUnit $period_unit
    */
    public ?\Chargebee\ClassBasedEnums\PeriodUnit $period_unit;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\ApplyOn $apply_on
    */
    public ?\Chargebee\ClassBasedEnums\ApplyOn $apply_on;
    
    /**
    *
    * @var ?\Chargebee\Resources\Ramp\ClassBasedEnums\DiscountsToAddType $type
    */
    public ?\Chargebee\Resources\Ramp\ClassBasedEnums\DiscountsToAddType $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_name" , "percentage" , "amount" , "period" , "included_in_mrr" , "item_price_id" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $invoice_name,
        ?float $percentage,
        ?int $amount,
        ?int $period,
        ?bool $included_in_mrr,
        ?string $item_price_id,
        ?int $created_at,
        ?\Chargebee\ClassBasedEnums\DurationType $duration_type,
        ?\Chargebee\ClassBasedEnums\PeriodUnit $period_unit,
        ?\Chargebee\ClassBasedEnums\ApplyOn $apply_on,
        ?\Chargebee\Resources\Ramp\ClassBasedEnums\DiscountsToAddType $type,
    )
    { 
        $this->id = $id;
        $this->invoice_name = $invoice_name;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->period = $period;
        $this->included_in_mrr = $included_in_mrr;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at; 
        $this->duration_type = $duration_type;
        $this->period_unit = $period_unit;
        $this->apply_on = $apply_on; 
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
        
        isset($resourceAttributes['duration_type']) ? \Chargebee\ClassBasedEnums\DurationType::tryFromValue($resourceAttributes['duration_type']) : null,
        
        isset($resourceAttributes['period_unit']) ? \Chargebee\ClassBasedEnums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        isset($resourceAttributes['apply_on']) ? \Chargebee\ClassBasedEnums\ApplyOn::tryFromValue($resourceAttributes['apply_on']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Ramp\ClassBasedEnums\DiscountsToAddType::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'invoice_name' => $this->invoice_name,
        'percentage' => $this->percentage,
        'amount' => $this->amount,
        'period' => $this->period,
        'included_in_mrr' => $this->included_in_mrr,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        
        'duration_type' => $this->duration_type?->value,
        
        'period_unit' => $this->period_unit?->value,
        
        'apply_on' => $this->apply_on?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>