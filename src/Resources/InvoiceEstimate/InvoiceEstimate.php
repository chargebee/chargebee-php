<?php

namespace Chargebee\Resources\InvoiceEstimate;

class InvoiceEstimate  { 
    /**
    *
    * @var ?bool $recurring
    */
    public ?bool $recurring;
    
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
    * @var ?int $credits_applied
    */
    public ?int $credits_applied;
    
    /**
    *
    * @var ?int $amount_paid
    */
    public ?int $amount_paid;
    
    /**
    *
    * @var ?int $amount_due
    */
    public ?int $amount_due;
    
    /**
    *
    * @var ?array<LineItem> $line_items
    */
    public ?array $line_items;
    
    /**
    *
    * @var ?array<LineItemTier> $line_item_tiers
    */
    public ?array $line_item_tiers;
    
    /**
    *
    * @var ?array<LineItemDiscount> $line_item_discounts
    */
    public ?array $line_item_discounts;
    
    /**
    *
    * @var ?array<LineItemTax> $line_item_taxes
    */
    public ?array $line_item_taxes;
    
    /**
    *
    * @var ?array<LineItemCredit> $line_item_credits
    */
    public ?array $line_item_credits;
    
    /**
    *
    * @var ?array<LineItemAddress> $line_item_addresses
    */
    public ?array $line_item_addresses;
    
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
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "recurring" , "currency_code" , "sub_total" , "total" , "credits_applied" , "amount_paid" , "amount_due" , "line_items" , "line_item_tiers" , "line_item_discounts" , "line_item_taxes" , "line_item_credits" , "line_item_addresses" , "discounts" , "taxes" , "round_off_amount" , "customer_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?bool $recurring,
        ?string $currency_code,
        ?int $sub_total,
        ?int $total,
        ?int $credits_applied,
        ?int $amount_paid,
        ?int $amount_due,
        ?array $line_items,
        ?array $line_item_tiers,
        ?array $line_item_discounts,
        ?array $line_item_taxes,
        ?array $line_item_credits,
        ?array $line_item_addresses,
        ?array $discounts,
        ?array $taxes,
        ?int $round_off_amount,
        ?string $customer_id,
        ?\Chargebee\Enums\PriceType $price_type,
    )
    { 
        $this->recurring = $recurring;
        $this->currency_code = $currency_code;
        $this->sub_total = $sub_total;
        $this->total = $total;
        $this->credits_applied = $credits_applied;
        $this->amount_paid = $amount_paid;
        $this->amount_due = $amount_due;
        $this->line_items = $line_items;
        $this->line_item_tiers = $line_item_tiers;
        $this->line_item_discounts = $line_item_discounts;
        $this->line_item_taxes = $line_item_taxes;
        $this->line_item_credits = $line_item_credits;
        $this->line_item_addresses = $line_item_addresses;
        $this->discounts = $discounts;
        $this->taxes = $taxes;
        $this->round_off_amount = $round_off_amount;
        $this->customer_id = $customer_id; 
        $this->price_type = $price_type;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $line_items = array_map(fn (array $result): LineItem =>  LineItem::from(
            $result
        ), $resourceAttributes['line_items'] ?? []);
        
        $line_item_tiers = array_map(fn (array $result): LineItemTier =>  LineItemTier::from(
            $result
        ), $resourceAttributes['line_item_tiers'] ?? []);
        
        $line_item_discounts = array_map(fn (array $result): LineItemDiscount =>  LineItemDiscount::from(
            $result
        ), $resourceAttributes['line_item_discounts'] ?? []);
        
        $line_item_taxes = array_map(fn (array $result): LineItemTax =>  LineItemTax::from(
            $result
        ), $resourceAttributes['line_item_taxes'] ?? []);
        
        $line_item_credits = array_map(fn (array $result): LineItemCredit =>  LineItemCredit::from(
            $result
        ), $resourceAttributes['line_item_credits'] ?? []);
        
        $line_item_addresses = array_map(fn (array $result): LineItemAddress =>  LineItemAddress::from(
            $result
        ), $resourceAttributes['line_item_addresses'] ?? []);
        
        $discounts = array_map(fn (array $result): Discount =>  Discount::from(
            $result
        ), $resourceAttributes['discounts'] ?? []);
        
        $taxes = array_map(fn (array $result): Tax =>  Tax::from(
            $result
        ), $resourceAttributes['taxes'] ?? []);
        
        $returnData = new self( $resourceAttributes['recurring'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['total'] ?? null,
        $resourceAttributes['credits_applied'] ?? null,
        $resourceAttributes['amount_paid'] ?? null,
        $resourceAttributes['amount_due'] ?? null,
        $line_items,
        $line_item_tiers,
        $line_item_discounts,
        $line_item_taxes,
        $line_item_credits,
        $line_item_addresses,
        $discounts,
        $taxes,
        $resourceAttributes['round_off_amount'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        
        
        isset($resourceAttributes['price_type']) ? \Chargebee\Enums\PriceType::tryFromValue($resourceAttributes['price_type']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['recurring' => $this->recurring,
        'currency_code' => $this->currency_code,
        'sub_total' => $this->sub_total,
        'total' => $this->total,
        'credits_applied' => $this->credits_applied,
        'amount_paid' => $this->amount_paid,
        'amount_due' => $this->amount_due,
        
        
        
        
        
        
        
        
        'round_off_amount' => $this->round_off_amount,
        'customer_id' => $this->customer_id,
        
        'price_type' => $this->price_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->line_items !== []){
            $data['line_items'] = array_map(
                fn (LineItem $line_items): array => $line_items->toArray(),
                $this->line_items
            );
        }
        if($this->line_item_tiers !== []){
            $data['line_item_tiers'] = array_map(
                fn (LineItemTier $line_item_tiers): array => $line_item_tiers->toArray(),
                $this->line_item_tiers
            );
        }
        if($this->line_item_discounts !== []){
            $data['line_item_discounts'] = array_map(
                fn (LineItemDiscount $line_item_discounts): array => $line_item_discounts->toArray(),
                $this->line_item_discounts
            );
        }
        if($this->line_item_taxes !== []){
            $data['line_item_taxes'] = array_map(
                fn (LineItemTax $line_item_taxes): array => $line_item_taxes->toArray(),
                $this->line_item_taxes
            );
        }
        if($this->line_item_credits !== []){
            $data['line_item_credits'] = array_map(
                fn (LineItemCredit $line_item_credits): array => $line_item_credits->toArray(),
                $this->line_item_credits
            );
        }
        if($this->line_item_addresses !== []){
            $data['line_item_addresses'] = array_map(
                fn (LineItemAddress $line_item_addresses): array => $line_item_addresses->toArray(),
                $this->line_item_addresses
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

        
        return $data;
    }
}
?>