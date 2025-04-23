<?php

namespace Chargebee\Resources\Invoice;

class LineItem  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var int $date_from
    */
    public int $date_from;
    
    /**
    *
    * @var int $date_to
    */
    public int $date_to;
    
    /**
    *
    * @var int $unit_amount
    */
    public int $unit_amount;
    
    /**
    *
    * @var ?int $quantity
    */
    public ?int $quantity;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $pricing_model
    */
    public ?string $pricing_model;
    
    /**
    *
    * @var bool $is_taxed
    */
    public bool $is_taxed;
    
    /**
    *
    * @var ?int $tax_amount
    */
    public ?int $tax_amount;
    
    /**
    *
    * @var ?int $tax_rate
    */
    public ?int $tax_rate;
    
    /**
    *
    * @var ?string $unit_amount_in_decimal
    */
    public ?string $unit_amount_in_decimal;
    
    /**
    *
    * @var ?string $quantity_in_decimal
    */
    public ?string $quantity_in_decimal;
    
    /**
    *
    * @var ?string $amount_in_decimal
    */
    public ?string $amount_in_decimal;
    
    /**
    *
    * @var ?int $discount_amount
    */
    public ?int $discount_amount;
    
    /**
    *
    * @var ?int $item_level_discount_amount
    */
    public ?int $item_level_discount_amount;
    
    /**
    *
    * @var ?bool $metered
    */
    public ?bool $metered;
    
    /**
    *
    * @var ?string $percentage
    */
    public ?string $percentage;
    
    /**
    *
    * @var ?string $reference_line_item_id
    */
    public ?string $reference_line_item_id;
    
    /**
    *
    * @var string $description
    */
    public string $description;
    
    /**
    *
    * @var ?string $entity_description
    */
    public ?string $entity_description;
    
    /**
    *
    * @var string $entity_type
    */
    public string $entity_type;
    
    /**
    *
    * @var ?string $tax_exempt_reason
    */
    public ?string $tax_exempt_reason;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "subscription_id" , "date_from" , "date_to" , "unit_amount" , "quantity" , "amount" , "pricing_model" , "is_taxed" , "tax_amount" , "tax_rate" , "unit_amount_in_decimal" , "quantity_in_decimal" , "amount_in_decimal" , "discount_amount" , "item_level_discount_amount" , "metered" , "percentage" , "reference_line_item_id" , "description" , "entity_description" , "entity_type" , "tax_exempt_reason" , "entity_id" , "customer_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $subscription_id,
        int $date_from,
        int $date_to,
        int $unit_amount,
        ?int $quantity,
        ?int $amount,
        ?string $pricing_model,
        bool $is_taxed,
        ?int $tax_amount,
        ?int $tax_rate,
        ?string $unit_amount_in_decimal,
        ?string $quantity_in_decimal,
        ?string $amount_in_decimal,
        ?int $discount_amount,
        ?int $item_level_discount_amount,
        ?bool $metered,
        ?string $percentage,
        ?string $reference_line_item_id,
        string $description,
        ?string $entity_description,
        string $entity_type,
        ?string $tax_exempt_reason,
        ?string $entity_id,
        ?string $customer_id,
    )
    { 
        $this->id = $id;
        $this->subscription_id = $subscription_id;
        $this->date_from = $date_from;
        $this->date_to = $date_to;
        $this->unit_amount = $unit_amount;
        $this->quantity = $quantity;
        $this->amount = $amount;
        $this->pricing_model = $pricing_model;
        $this->is_taxed = $is_taxed;
        $this->tax_amount = $tax_amount;
        $this->tax_rate = $tax_rate;
        $this->unit_amount_in_decimal = $unit_amount_in_decimal;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->discount_amount = $discount_amount;
        $this->item_level_discount_amount = $item_level_discount_amount;
        $this->metered = $metered;
        $this->percentage = $percentage;
        $this->reference_line_item_id = $reference_line_item_id;
        $this->description = $description;
        $this->entity_description = $entity_description;
        $this->entity_type = $entity_type;
        $this->tax_exempt_reason = $tax_exempt_reason;
        $this->entity_id = $entity_id;
        $this->customer_id = $customer_id;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['date_from'] ,
        $resourceAttributes['date_to'] ,
        $resourceAttributes['unit_amount'] ,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['pricing_model'] ?? null,
        $resourceAttributes['is_taxed'] ,
        $resourceAttributes['tax_amount'] ?? null,
        $resourceAttributes['tax_rate'] ?? null,
        $resourceAttributes['unit_amount_in_decimal'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        $resourceAttributes['item_level_discount_amount'] ?? null,
        $resourceAttributes['metered'] ?? null,
        $resourceAttributes['percentage'] ?? null,
        $resourceAttributes['reference_line_item_id'] ?? null,
        $resourceAttributes['description'] ,
        $resourceAttributes['entity_description'] ?? null,
        $resourceAttributes['entity_type'] ,
        $resourceAttributes['tax_exempt_reason'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'subscription_id' => $this->subscription_id,
        'date_from' => $this->date_from,
        'date_to' => $this->date_to,
        'unit_amount' => $this->unit_amount,
        'quantity' => $this->quantity,
        'amount' => $this->amount,
        'pricing_model' => $this->pricing_model,
        'is_taxed' => $this->is_taxed,
        'tax_amount' => $this->tax_amount,
        'tax_rate' => $this->tax_rate,
        'unit_amount_in_decimal' => $this->unit_amount_in_decimal,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'amount_in_decimal' => $this->amount_in_decimal,
        'discount_amount' => $this->discount_amount,
        'item_level_discount_amount' => $this->item_level_discount_amount,
        'metered' => $this->metered,
        'percentage' => $this->percentage,
        'reference_line_item_id' => $this->reference_line_item_id,
        'description' => $this->description,
        'entity_description' => $this->entity_description,
        'entity_type' => $this->entity_type,
        'tax_exempt_reason' => $this->tax_exempt_reason,
        'entity_id' => $this->entity_id,
        'customer_id' => $this->customer_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>