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
    *
    * @var ?array<CouponApplicabilityMapping> $coupon_applicability_mappings
    */
    public ?array $coupon_applicability_mappings;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "line_items" , "discounts" , "item_tiers" , "coupon_applicability_mappings"  ];

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
        ?array $coupon_applicability_mappings,
    )
    { 
        $this->id = $id;
        $this->line_items = $line_items;
        $this->discounts = $discounts;
        $this->item_tiers = $item_tiers;
        $this->coupon_applicability_mappings = $coupon_applicability_mappings;  
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
        
        $coupon_applicability_mappings = array_map(fn (array $result): CouponApplicabilityMapping =>  CouponApplicabilityMapping::from(
            $result
        ), $resourceAttributes['coupon_applicability_mappings'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $line_items,
        $discounts,
        $item_tiers,
        $coupon_applicability_mappings,
        
         
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
        if($this->coupon_applicability_mappings !== []){
            $data['coupon_applicability_mappings'] = array_map(
                fn (CouponApplicabilityMapping $coupon_applicability_mappings): array => $coupon_applicability_mappings->toArray(),
                $this->coupon_applicability_mappings
            );
        }

        
        return $data;
    }
}
?>