<?php

namespace Chargebee\Resources\CreditNoteEstimate;

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
    * @var ?int $date_from
    */
    public ?int $date_from;
    
    /**
    *
    * @var ?int $date_to
    */
    public ?int $date_to;
    
    /**
    *
    * @var ?int $unit_amount
    */
    public ?int $unit_amount;
    
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
    * @var ?bool $is_taxed
    */
    public ?bool $is_taxed;
    
    /**
    *
    * @var ?int $tax_amount
    */
    public ?int $tax_amount;
    
    /**
    *
    * @var ?float $tax_rate
    */
    public ?float $tax_rate;
    
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
    * @var ?bool $is_percentage_pricing
    */
    public ?bool $is_percentage_pricing;
    
    /**
    *
    * @var ?string $reference_line_item_id
    */
    public ?string $reference_line_item_id;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $entity_description
    */
    public ?string $entity_description;
    
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
    *
    * @var ?\Chargebee\ClassBasedEnums\PricingModel $pricing_model
    */
    public ?\Chargebee\ClassBasedEnums\PricingModel $pricing_model;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\TaxExemptReason $tax_exempt_reason
    */
    public ?\Chargebee\ClassBasedEnums\TaxExemptReason $tax_exempt_reason;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNoteEstimate\ClassBasedEnums\LineItemEntityType $entity_type
    */
    public ?\Chargebee\Resources\CreditNoteEstimate\ClassBasedEnums\LineItemEntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "subscription_id" , "date_from" , "date_to" , "unit_amount" , "quantity" , "amount" , "is_taxed" , "tax_amount" , "tax_rate" , "unit_amount_in_decimal" , "quantity_in_decimal" , "amount_in_decimal" , "discount_amount" , "item_level_discount_amount" , "metered" , "is_percentage_pricing" , "reference_line_item_id" , "description" , "entity_description" , "entity_id" , "customer_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $subscription_id,
        ?int $date_from,
        ?int $date_to,
        ?int $unit_amount,
        ?int $quantity,
        ?int $amount,
        ?bool $is_taxed,
        ?int $tax_amount,
        ?float $tax_rate,
        ?string $unit_amount_in_decimal,
        ?string $quantity_in_decimal,
        ?string $amount_in_decimal,
        ?int $discount_amount,
        ?int $item_level_discount_amount,
        ?bool $metered,
        ?bool $is_percentage_pricing,
        ?string $reference_line_item_id,
        ?string $description,
        ?string $entity_description,
        ?string $entity_id,
        ?string $customer_id,
        ?\Chargebee\ClassBasedEnums\PricingModel $pricing_model,
        ?\Chargebee\ClassBasedEnums\TaxExemptReason $tax_exempt_reason,
        ?\Chargebee\Resources\CreditNoteEstimate\ClassBasedEnums\LineItemEntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->subscription_id = $subscription_id;
        $this->date_from = $date_from;
        $this->date_to = $date_to;
        $this->unit_amount = $unit_amount;
        $this->quantity = $quantity;
        $this->amount = $amount;
        $this->is_taxed = $is_taxed;
        $this->tax_amount = $tax_amount;
        $this->tax_rate = $tax_rate;
        $this->unit_amount_in_decimal = $unit_amount_in_decimal;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->discount_amount = $discount_amount;
        $this->item_level_discount_amount = $item_level_discount_amount;
        $this->metered = $metered;
        $this->is_percentage_pricing = $is_percentage_pricing;
        $this->reference_line_item_id = $reference_line_item_id;
        $this->description = $description;
        $this->entity_description = $entity_description;
        $this->entity_id = $entity_id;
        $this->customer_id = $customer_id; 
        $this->pricing_model = $pricing_model;
        $this->tax_exempt_reason = $tax_exempt_reason; 
        $this->entity_type = $entity_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['date_from'] ?? null,
        $resourceAttributes['date_to'] ?? null,
        $resourceAttributes['unit_amount'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['is_taxed'] ?? null,
        $resourceAttributes['tax_amount'] ?? null,
        $resourceAttributes['tax_rate'] ?? null,
        $resourceAttributes['unit_amount_in_decimal'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        $resourceAttributes['item_level_discount_amount'] ?? null,
        $resourceAttributes['metered'] ?? null,
        $resourceAttributes['is_percentage_pricing'] ?? null,
        $resourceAttributes['reference_line_item_id'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['entity_description'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        
        
        isset($resourceAttributes['pricing_model']) ? \Chargebee\ClassBasedEnums\PricingModel::tryFromValue($resourceAttributes['pricing_model']) : null,
        
        isset($resourceAttributes['tax_exempt_reason']) ? \Chargebee\ClassBasedEnums\TaxExemptReason::tryFromValue($resourceAttributes['tax_exempt_reason']) : null,
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\CreditNoteEstimate\ClassBasedEnums\LineItemEntityType::tryFromValue($resourceAttributes['entity_type']) : null,
        
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
        'is_taxed' => $this->is_taxed,
        'tax_amount' => $this->tax_amount,
        'tax_rate' => $this->tax_rate,
        'unit_amount_in_decimal' => $this->unit_amount_in_decimal,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'amount_in_decimal' => $this->amount_in_decimal,
        'discount_amount' => $this->discount_amount,
        'item_level_discount_amount' => $this->item_level_discount_amount,
        'metered' => $this->metered,
        'is_percentage_pricing' => $this->is_percentage_pricing,
        'reference_line_item_id' => $this->reference_line_item_id,
        'description' => $this->description,
        'entity_description' => $this->entity_description,
        'entity_id' => $this->entity_id,
        'customer_id' => $this->customer_id,
        
        'pricing_model' => $this->pricing_model?->value,
        
        'tax_exempt_reason' => $this->tax_exempt_reason?->value,
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>