<?php

namespace Chargebee\Resources\Discount;

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
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
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
    * @var ?int $apply_till
    */
    public ?int $apply_till;
    
    /**
    *
    * @var ?int $applied_count
    */
    public ?int $applied_count;
    
    /**
    *
    * @var ?string $coupon_id
    */
    public ?string $coupon_id;
    
    /**
    *
    * @var ?int $index
    */
    public ?int $index;
    
    /**
    *
    * @var ?\Chargebee\Enums\DurationType $duration_type
    */
    public ?\Chargebee\Enums\DurationType $duration_type;
    
    /**
    *
    * @var ?\Chargebee\Enums\PeriodUnit $period_unit
    */
    public ?\Chargebee\Enums\PeriodUnit $period_unit;
    
    /**
    *
    * @var ?\Chargebee\Enums\ApplyOn $apply_on
    */
    public ?\Chargebee\Enums\ApplyOn $apply_on;
    
    /**
    *
    * @var ?\Chargebee\Resources\Discount\Enums\Type $type
    */
    public ?\Chargebee\Resources\Discount\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_name" , "percentage" , "amount" , "currency_code" , "period" , "included_in_mrr" , "item_price_id" , "created_at" , "apply_till" , "applied_count" , "coupon_id" , "index"  ];

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
        ?string $currency_code,
        ?int $period,
        ?bool $included_in_mrr,
        ?string $item_price_id,
        ?int $created_at,
        ?int $apply_till,
        ?int $applied_count,
        ?string $coupon_id,
        ?int $index,
        ?\Chargebee\Enums\DurationType $duration_type,
        ?\Chargebee\Enums\PeriodUnit $period_unit,
        ?\Chargebee\Enums\ApplyOn $apply_on,
        ?\Chargebee\Resources\Discount\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->invoice_name = $invoice_name;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->period = $period;
        $this->included_in_mrr = $included_in_mrr;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at;
        $this->apply_till = $apply_till;
        $this->applied_count = $applied_count;
        $this->coupon_id = $coupon_id;
        $this->index = $index; 
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
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['apply_till'] ?? null,
        $resourceAttributes['applied_count'] ?? null,
        $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['index'] ?? null,
        
        
        isset($resourceAttributes['duration_type']) ? \Chargebee\Enums\DurationType::tryFromValue($resourceAttributes['duration_type']) : null,
        
        isset($resourceAttributes['period_unit']) ? \Chargebee\Enums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        isset($resourceAttributes['apply_on']) ? \Chargebee\Enums\ApplyOn::tryFromValue($resourceAttributes['apply_on']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Discount\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'invoice_name' => $this->invoice_name,
        'percentage' => $this->percentage,
        'amount' => $this->amount,
        'currency_code' => $this->currency_code,
        'period' => $this->period,
        'included_in_mrr' => $this->included_in_mrr,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        'apply_till' => $this->apply_till,
        'applied_count' => $this->applied_count,
        'coupon_id' => $this->coupon_id,
        'index' => $this->index,
        
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