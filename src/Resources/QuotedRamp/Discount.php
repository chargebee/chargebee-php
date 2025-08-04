<?php

namespace Chargebee\Resources\QuotedRamp;

class Discount  { 
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
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
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
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?int $start_date
    */
    public ?int $start_date;
    
    /**
    *
    * @var ?int $end_date
    */
    public ?int $end_date;
    
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
    * @var ?\Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountType $type
    */
    public ?\Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountType $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountEntityType $entity_type
    */
    public ?\Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountEntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_name" , "percentage" , "amount" , "entity_id" , "period" , "included_in_mrr" , "item_price_id" , "created_at" , "updated_at" , "start_date" , "end_date"  ];

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
        ?string $entity_id,
        ?int $period,
        ?bool $included_in_mrr,
        ?string $item_price_id,
        ?int $created_at,
        ?int $updated_at,
        ?int $start_date,
        ?int $end_date,
        ?\Chargebee\ClassBasedEnums\DurationType $duration_type,
        ?\Chargebee\ClassBasedEnums\PeriodUnit $period_unit,
        ?\Chargebee\ClassBasedEnums\ApplyOn $apply_on,
        ?\Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountType $type,
        ?\Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountEntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->invoice_name = $invoice_name;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->entity_id = $entity_id;
        $this->period = $period;
        $this->included_in_mrr = $included_in_mrr;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->start_date = $start_date;
        $this->end_date = $end_date; 
        $this->duration_type = $duration_type;
        $this->period_unit = $period_unit;
        $this->apply_on = $apply_on; 
        $this->type = $type;
        $this->entity_type = $entity_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['start_date'] ?? null,
        $resourceAttributes['end_date'] ?? null,
        
        
        isset($resourceAttributes['duration_type']) ? \Chargebee\ClassBasedEnums\DurationType::tryFromValue($resourceAttributes['duration_type']) : null,
        
        isset($resourceAttributes['period_unit']) ? \Chargebee\ClassBasedEnums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        isset($resourceAttributes['apply_on']) ? \Chargebee\ClassBasedEnums\ApplyOn::tryFromValue($resourceAttributes['apply_on']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountType::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\QuotedRamp\ClassBasedEnums\DiscountEntityType::tryFromValue($resourceAttributes['entity_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'invoice_name' => $this->invoice_name,
        'percentage' => $this->percentage,
        'amount' => $this->amount,
        'entity_id' => $this->entity_id,
        'period' => $this->period,
        'included_in_mrr' => $this->included_in_mrr,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'start_date' => $this->start_date,
        'end_date' => $this->end_date,
        
        'duration_type' => $this->duration_type?->value,
        
        'period_unit' => $this->period_unit?->value,
        
        'apply_on' => $this->apply_on?->value,
        
        'type' => $this->type?->value,
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>