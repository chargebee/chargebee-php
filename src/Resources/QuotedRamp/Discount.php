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
    * @var ?string $name
    */
    public ?string $name;
    
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
    * @var ?string $entity_type
    */
    public ?string $entity_type;
    
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
    * @var ?string $apply_on_item_type
    */
    public ?string $apply_on_item_type;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "invoice_name" , "type" , "percentage" , "amount" , "duration_type" , "entity_type" , "entity_id" , "period" , "period_unit" , "included_in_mrr" , "apply_on" , "apply_on_item_type" , "item_price_id" , "created_at" , "updated_at" , "start_date" , "end_date"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $invoice_name,
        ?string $type,
        ?float $percentage,
        ?int $amount,
        ?string $duration_type,
        ?string $entity_type,
        ?string $entity_id,
        ?int $period,
        ?string $period_unit,
        ?bool $included_in_mrr,
        ?string $apply_on,
        ?string $apply_on_item_type,
        ?string $item_price_id,
        ?int $created_at,
        ?int $updated_at,
        ?int $start_date,
        ?int $end_date,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->invoice_name = $invoice_name;
        $this->type = $type;
        $this->percentage = $percentage;
        $this->amount = $amount;
        $this->duration_type = $duration_type;
        $this->entity_type = $entity_type;
        $this->entity_id = $entity_id;
        $this->period = $period;
        $this->period_unit = $period_unit;
        $this->included_in_mrr = $included_in_mrr;
        $this->apply_on = $apply_on;
        $this->apply_on_item_type = $apply_on_item_type;
        $this->item_price_id = $item_price_id;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->start_date = $start_date;
        $this->end_date = $end_date;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['type'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['duration_type'] ?? null,
        $resourceAttributes['entity_type'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['period_unit'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['apply_on'] ?? null,
        $resourceAttributes['apply_on_item_type'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['start_date'] ?? null,
        $resourceAttributes['end_date'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'invoice_name' => $this->invoice_name,
        'type' => $this->type,
        'percentage' => $this->percentage,
        'amount' => $this->amount,
        'duration_type' => $this->duration_type,
        'entity_type' => $this->entity_type,
        'entity_id' => $this->entity_id,
        'period' => $this->period,
        'period_unit' => $this->period_unit,
        'included_in_mrr' => $this->included_in_mrr,
        'apply_on' => $this->apply_on,
        'apply_on_item_type' => $this->apply_on_item_type,
        'item_price_id' => $this->item_price_id,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
        'start_date' => $this->start_date,
        'end_date' => $this->end_date,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>