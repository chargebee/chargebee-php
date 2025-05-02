<?php

namespace Chargebee\Resources\QuoteLineGroup;

class QuoteLineGroup  { 
    /**
    *
    * @var ?int $version
    */
    public ?int $version;
    
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?int $billing_cycle_number
    */
    public ?int $billing_cycle_number;
    
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
    * @var ?array<LineItemDiscount> $line_item_discounts
    */
    public ?array $line_item_discounts;
    
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
    * @var ?\Chargebee\Resources\QuoteLineGroup\Enums\ChargeEvent $charge_event
    */
    public ?\Chargebee\Resources\QuoteLineGroup\Enums\ChargeEvent $charge_event;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "version" , "id" , "sub_total" , "total" , "credits_applied" , "amount_paid" , "amount_due" , "billing_cycle_number" , "line_items" , "discounts" , "line_item_discounts" , "taxes" , "line_item_taxes"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $version,
        ?string $id,
        ?int $sub_total,
        ?int $total,
        ?int $credits_applied,
        ?int $amount_paid,
        ?int $amount_due,
        ?int $billing_cycle_number,
        ?array $line_items,
        ?array $discounts,
        ?array $line_item_discounts,
        ?array $taxes,
        ?array $line_item_taxes,
        ?\Chargebee\Resources\QuoteLineGroup\Enums\ChargeEvent $charge_event,
    )
    { 
        $this->version = $version;
        $this->id = $id;
        $this->sub_total = $sub_total;
        $this->total = $total;
        $this->credits_applied = $credits_applied;
        $this->amount_paid = $amount_paid;
        $this->amount_due = $amount_due;
        $this->billing_cycle_number = $billing_cycle_number;
        $this->line_items = $line_items;
        $this->discounts = $discounts;
        $this->line_item_discounts = $line_item_discounts;
        $this->taxes = $taxes;
        $this->line_item_taxes = $line_item_taxes;  
        $this->charge_event = $charge_event;
    }

    public static function from(array $resourceAttributes): self
    { 
        $line_items = array_map(fn (array $result): LineItem =>  LineItem::from(
            $result
        ), $resourceAttributes['line_items'] ?? []);
        
        $discounts = array_map(fn (array $result): Discount =>  Discount::from(
            $result
        ), $resourceAttributes['discounts'] ?? []);
        
        $line_item_discounts = array_map(fn (array $result): LineItemDiscount =>  LineItemDiscount::from(
            $result
        ), $resourceAttributes['line_item_discounts'] ?? []);
        
        $taxes = array_map(fn (array $result): Tax =>  Tax::from(
            $result
        ), $resourceAttributes['taxes'] ?? []);
        
        $line_item_taxes = array_map(fn (array $result): LineItemTax =>  LineItemTax::from(
            $result
        ), $resourceAttributes['line_item_taxes'] ?? []);
        
        $returnData = new self( $resourceAttributes['version'] ?? null,
        $resourceAttributes['id'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['total'] ?? null,
        $resourceAttributes['credits_applied'] ?? null,
        $resourceAttributes['amount_paid'] ?? null,
        $resourceAttributes['amount_due'] ?? null,
        $resourceAttributes['billing_cycle_number'] ?? null,
        $line_items,
        $discounts,
        $line_item_discounts,
        $taxes,
        $line_item_taxes,
        
         
        isset($resourceAttributes['charge_event']) ? \Chargebee\Resources\QuoteLineGroup\Enums\ChargeEvent::tryFromValue($resourceAttributes['charge_event']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['version' => $this->version,
        'id' => $this->id,
        'sub_total' => $this->sub_total,
        'total' => $this->total,
        'credits_applied' => $this->credits_applied,
        'amount_paid' => $this->amount_paid,
        'amount_due' => $this->amount_due,
        'billing_cycle_number' => $this->billing_cycle_number,
        
        
        
        
        
        
        'charge_event' => $this->charge_event?->value,
        
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
        if($this->line_item_discounts !== []){
            $data['line_item_discounts'] = array_map(
                fn (LineItemDiscount $line_item_discounts): array => $line_item_discounts->toArray(),
                $this->line_item_discounts
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

        
        return $data;
    }
}
?>