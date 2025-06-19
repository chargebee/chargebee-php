<?php

namespace Chargebee\Resources\QuotedRamp;

class QuotedRamp  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?array<ItemTier> $item_tiers
    */
    public ?array $item_tiers;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "line_items" , "discounts" , "item_tiers"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?array $line_items,
        ?array $discounts,
        ?array $item_tiers,
    )
    { 
        $this->id = $id;
        $this->line_items = $line_items;
        $this->discounts = $discounts;
        $this->item_tiers = $item_tiers;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $line_items = array_map(fn (array $result): LineItem =>  LineItem::from(
            $result
        ), $resourceAttributes['line_items'] ?? []);
        
        $discounts = array_map(fn (array $result): Discount =>  Discount::from(
            $result
        ), $resourceAttributes['discounts'] ?? []);
        
        $item_tiers = array_map(fn (array $result): ItemTier =>  ItemTier::from(
            $result
        ), $resourceAttributes['item_tiers'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $line_items,
        $discounts,
        $item_tiers,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        
        
        
        
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
        if($this->item_tiers !== []){
            $data['item_tiers'] = array_map(
                fn (ItemTier $item_tiers): array => $item_tiers->toArray(),
                $this->item_tiers
            );
        }

        
        return $data;
    }
}
?>