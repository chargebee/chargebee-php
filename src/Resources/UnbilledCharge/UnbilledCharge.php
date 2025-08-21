<?php

namespace Chargebee\Resources\UnbilledCharge;

class UnbilledCharge  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
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
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $discount_amount
    */
    public ?int $discount_amount;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?bool $is_voided
    */
    public ?bool $is_voided;
    
    /**
    *
    * @var ?int $voided_at
    */
    public ?int $voided_at;
    
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
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?array<Tier> $tiers
    */
    public ?array $tiers;
    
    /**
    *
    * @var ?bool $is_advance_charge
    */
    public ?bool $is_advance_charge;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?\Chargebee\Enums\PricingModel $pricing_model
    */
    public ?\Chargebee\Enums\PricingModel $pricing_model;
    
    /**
    *
    * @var ?\Chargebee\Resources\UnbilledCharge\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\UnbilledCharge\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "subscription_id" , "date_from" , "date_to" , "unit_amount" , "quantity" , "amount" , "currency_code" , "discount_amount" , "description" , "entity_id" , "is_voided" , "voided_at" , "unit_amount_in_decimal" , "quantity_in_decimal" , "amount_in_decimal" , "updated_at" , "tiers" , "is_advance_charge" , "business_entity_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $subscription_id,
        ?int $date_from,
        ?int $date_to,
        ?int $unit_amount,
        ?int $quantity,
        ?int $amount,
        ?string $currency_code,
        ?int $discount_amount,
        ?string $description,
        ?string $entity_id,
        ?bool $is_voided,
        ?int $voided_at,
        ?string $unit_amount_in_decimal,
        ?string $quantity_in_decimal,
        ?string $amount_in_decimal,
        ?int $updated_at,
        ?array $tiers,
        ?bool $is_advance_charge,
        ?string $business_entity_id,
        ?bool $deleted,
        ?\Chargebee\Enums\PricingModel $pricing_model,
        ?\Chargebee\Resources\UnbilledCharge\Enums\EntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->date_from = $date_from;
        $this->date_to = $date_to;
        $this->unit_amount = $unit_amount;
        $this->quantity = $quantity;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->discount_amount = $discount_amount;
        $this->description = $description;
        $this->entity_id = $entity_id;
        $this->is_voided = $is_voided;
        $this->voided_at = $voided_at;
        $this->unit_amount_in_decimal = $unit_amount_in_decimal;
        $this->quantity_in_decimal = $quantity_in_decimal;
        $this->amount_in_decimal = $amount_in_decimal;
        $this->updated_at = $updated_at;
        $this->tiers = $tiers;
        $this->is_advance_charge = $is_advance_charge;
        $this->business_entity_id = $business_entity_id;
        $this->deleted = $deleted; 
        $this->pricing_model = $pricing_model; 
        $this->entity_type = $entity_type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $tiers = array_map(fn (array $result): Tier =>  Tier::from(
            $result
        ), $resourceAttributes['tiers'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['date_from'] ?? null,
        $resourceAttributes['date_to'] ?? null,
        $resourceAttributes['unit_amount'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['is_voided'] ?? null,
        $resourceAttributes['voided_at'] ?? null,
        $resourceAttributes['unit_amount_in_decimal'] ?? null,
        $resourceAttributes['quantity_in_decimal'] ?? null,
        $resourceAttributes['amount_in_decimal'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $tiers,
        $resourceAttributes['is_advance_charge'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        
        
        isset($resourceAttributes['pricing_model']) ? \Chargebee\Enums\PricingModel::tryFromValue($resourceAttributes['pricing_model']) : null,
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\UnbilledCharge\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'date_from' => $this->date_from,
        'date_to' => $this->date_to,
        'unit_amount' => $this->unit_amount,
        'quantity' => $this->quantity,
        'amount' => $this->amount,
        'currency_code' => $this->currency_code,
        'discount_amount' => $this->discount_amount,
        'description' => $this->description,
        'entity_id' => $this->entity_id,
        'is_voided' => $this->is_voided,
        'voided_at' => $this->voided_at,
        'unit_amount_in_decimal' => $this->unit_amount_in_decimal,
        'quantity_in_decimal' => $this->quantity_in_decimal,
        'amount_in_decimal' => $this->amount_in_decimal,
        'updated_at' => $this->updated_at,
        
        'is_advance_charge' => $this->is_advance_charge,
        'business_entity_id' => $this->business_entity_id,
        'deleted' => $this->deleted,
        
        'pricing_model' => $this->pricing_model?->value,
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->tiers !== []){
            $data['tiers'] = array_map(
                fn (Tier $tiers): array => $tiers->toArray(),
                $this->tiers
            );
        }

        
        return $data;
    }
}
?>