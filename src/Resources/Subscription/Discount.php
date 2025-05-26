<?php

namespace Chargebee\Resources\Subscription;

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
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_name" , "type" , "percentage" , "amount" , "currency_code" , "duration_type" , "period" , "period_unit" , "included_in_mrr" , "apply_on" , "item_price_id" , "created_at" , "apply_till" , "applied_count" , "coupon_id" , "index"  ];

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
        ?string $currency_code,
        ?string $duration_type,
        ?int $period,
        ?string $period_unit,
        ?bool $included_in_mrr,
        ?string $apply_on,
        ?string $item_price_id,
        ?int $created_at,
        ?int $apply_till,
        ?int $applied_count,
        ?string $coupon_id,
        ?int $index,
    )
    { 
        $this->id = $id;
        $this->invoice_name = $invoice_name;
        $this->type = $type;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->duration_type = $duration_type;
        $this->period = $period;
        $this->period_unit = $period_unit;
        $this->included_in_mrr = $included_in_mrr;
        $this->apply_on = $apply_on;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at;
        $this->apply_till = $apply_till;
        $this->applied_count = $applied_count;
        $this->coupon_id = $coupon_id;
        $this->index = $index;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['duration_type'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['period_unit'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['apply_on'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['apply_till'] ?? null,
        $resourceAttributes['applied_count'] ?? null,
        $resourceAttributes['coupon_id'] ?? null,
        $resourceAttributes['index'] ?? null,
        
         
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
        'currency_code' => $this->currency_code,
        'duration_type' => $this->duration_type,
        'period' => $this->period,
        'period_unit' => $this->period_unit,
        'included_in_mrr' => $this->included_in_mrr,
        'apply_on' => $this->apply_on,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        'apply_till' => $this->apply_till,
        'applied_count' => $this->applied_count,
        'coupon_id' => $this->coupon_id,
        'index' => $this->index,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>