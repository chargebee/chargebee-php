<?php

namespace Chargebee\Resources\CreditNoteEstimate;

class CreditNoteEstimate  { 
    /**
    *
    * @var ?string $reference_invoice_id
    */
    public ?string $reference_invoice_id;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $sub_total
    */
    public ?int $sub_total;
    
    /**
    *
    * @var ?int $total
    */
    public ?int $total;
    
    /**
    *
    * @var ?int $amount_allocated
    */
    public ?int $amount_allocated;
    
    /**
    *
    * @var ?int $amount_available
    */
    public ?int $amount_available;
    
    /**
    *
    * @var ?array<LineItem> $line_items
    */
    public ?array $line_items;
    
    /**
    *
    * @var ?array<Discount> $discounts
    */
    public ?array $discounts;
    
    /**
    *
    * @var ?array<Tax> $taxes
    */
    public ?array $taxes;
    
    /**
    *
    * @var ?array<LineItemTax> $line_item_taxes
    */
    public ?array $line_item_taxes;
    
    /**
    *
    * @var ?array<LineItemDiscount> $line_item_discounts
    */
    public ?array $line_item_discounts;
    
    /**
    *
    * @var ?array<LineItemTier> $line_item_tiers
    */
    public ?array $line_item_tiers;
    
    /**
    *
    * @var ?int $round_off_amount
    */
    public ?int $round_off_amount;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\PriceType $price_type
    */
    public ?\Chargebee\Enums\PriceType $price_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNoteEstimate\Enums\Type $type
    */
    public ?\Chargebee\Resources\CreditNoteEstimate\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "reference_invoice_id" , "currency_code" , "sub_total" , "total" , "amount_allocated" , "amount_available" , "line_items" , "discounts" , "taxes" , "line_item_taxes" , "line_item_discounts" , "line_item_tiers" , "round_off_amount" , "customer_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $reference_invoice_id,
        ?string $currency_code,
        ?int $sub_total,
        ?int $total,
        ?int $amount_allocated,
        ?int $amount_available,
        ?array $line_items,
        ?array $discounts,
        ?array $taxes,
        ?array $line_item_taxes,
        ?array $line_item_discounts,
        ?array $line_item_tiers,
        ?int $round_off_amount,
        ?string $customer_id,
        ?\Chargebee\Enums\PriceType $price_type,
        ?\Chargebee\Resources\CreditNoteEstimate\Enums\Type $type,
    )
    { 
        $this->reference_invoice_id = $reference_invoice_id;
        $this->currency_code = $currency_code;
        $this->sub_total = $sub_total;
        $this->total = $total;
        $this->amount_allocated = $amount_allocated;
        $this->amount_available = $amount_available;
        $this->line_items = $line_items;
        $this->discounts = $discounts;
        $this->taxes = $taxes;
        $this->line_item_taxes = $line_item_taxes;
        $this->line_item_discounts = $line_item_discounts;
        $this->line_item_tiers = $line_item_tiers;
        $this->round_off_amount = $round_off_amount;
        $this->customer_id = $customer_id; 
        $this->price_type = $price_type; 
        $this->type = $type; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $line_items = array_map(fn (array $result): LineItem =>  LineItem::from(
            $result
        ), $resourceAttributes['line_items'] ?? []);
        
        $discounts = array_map(fn (array $result): Discount =>  Discount::from(
            $result
        ), $resourceAttributes['discounts'] ?? []);
        
        $taxes = array_map(fn (array $result): Tax =>  Tax::from(
            $result
        ), $resourceAttributes['taxes'] ?? []);
        
        $line_item_taxes = array_map(fn (array $result): LineItemTax =>  LineItemTax::from(
            $result
        ), $resourceAttributes['line_item_taxes'] ?? []);
        
        $line_item_discounts = array_map(fn (array $result): LineItemDiscount =>  LineItemDiscount::from(
            $result
        ), $resourceAttributes['line_item_discounts'] ?? []);
        
        $line_item_tiers = array_map(fn (array $result): LineItemTier =>  LineItemTier::from(
            $result
        ), $resourceAttributes['line_item_tiers'] ?? []);
        
        $returnData = new self( $resourceAttributes['reference_invoice_id'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['total'] ?? null,
        $resourceAttributes['amount_allocated'] ?? null,
        $resourceAttributes['amount_available'] ?? null,
        $line_items,
        $discounts,
        $taxes,
        $line_item_taxes,
        $line_item_discounts,
        $line_item_tiers,
        $resourceAttributes['round_off_amount'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        
        
        isset($resourceAttributes['price_type']) ? \Chargebee\Enums\PriceType::tryFromValue($resourceAttributes['price_type']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\CreditNoteEstimate\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['reference_invoice_id' => $this->reference_invoice_id,
        'currency_code' => $this->currency_code,
        'sub_total' => $this->sub_total,
        'total' => $this->total,
        'amount_allocated' => $this->amount_allocated,
        'amount_available' => $this->amount_available,
        
        
        
        
        
        
        'round_off_amount' => $this->round_off_amount,
        'customer_id' => $this->customer_id,
        
        'price_type' => $this->price_type?->value,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->line_items !== []){
            $data['line_items'] = array_map(
                fn (LineItem $line_items): array => $line_items->toArray(),
                $this->line_items
            );
        }
        if($this->discounts !== []){
            $data['discounts'] = array_map(
                fn (Discount $discounts): array => $discounts->toArray(),
                $this->discounts
            );
        }
        if($this->taxes !== []){
            $data['taxes'] = array_map(
                fn (Tax $taxes): array => $taxes->toArray(),
                $this->taxes
            );
        }
        if($this->line_item_taxes !== []){
            $data['line_item_taxes'] = array_map(
                fn (LineItemTax $line_item_taxes): array => $line_item_taxes->toArray(),
                $this->line_item_taxes
            );
        }
        if($this->line_item_discounts !== []){
            $data['line_item_discounts'] = array_map(
                fn (LineItemDiscount $line_item_discounts): array => $line_item_discounts->toArray(),
                $this->line_item_discounts
            );
        }
        if($this->line_item_tiers !== []){
            $data['line_item_tiers'] = array_map(
                fn (LineItemTier $line_item_tiers): array => $line_item_tiers->toArray(),
                $this->line_item_tiers
            );
        }

        
        return $data;
    }
}
?>