<?php

namespace Chargebee\Resources\QuotedCharge;

class QuotedCharge  { 
    /**
    *
    * @var ?array<Charge> $charges
    */
    public ?array $charges;
    
    /**
    *
    * @var ?array<Addon> $addons
    */
    public ?array $addons;
    
    /**
    *
    * @var ?array<InvoiceItem> $invoice_items
    */
    public ?array $invoice_items;
    
    /**
    *
    * @var ?array<ItemTier> $item_tiers
    */
    public ?array $item_tiers;
    
    /**
    *
    * @var ?array<Coupon> $coupons
    */
    public ?array $coupons;
    
    /**
    *
    * @var ?array<CouponApplicabilityMapping> $coupon_applicability_mappings
    */
    public ?array $coupon_applicability_mappings;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "charges" , "addons" , "invoice_items" , "item_tiers" , "coupons" , "coupon_applicability_mappings"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?array $charges,
        ?array $addons,
        ?array $invoice_items,
        ?array $item_tiers,
        ?array $coupons,
        ?array $coupon_applicability_mappings,
    )
    { 
        $this->charges = $charges;
        $this->addons = $addons;
        $this->invoice_items = $invoice_items;
        $this->item_tiers = $item_tiers;
        $this->coupons = $coupons;
        $this->coupon_applicability_mappings = $coupon_applicability_mappings;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $charges = array_map(fn (array $result): Charge =>  Charge::from(
            $result
        ), $resourceAttributes['charges'] ?? []);
        
        $addons = array_map(fn (array $result): Addon =>  Addon::from(
            $result
        ), $resourceAttributes['addons'] ?? []);
        
        $invoice_items = array_map(fn (array $result): InvoiceItem =>  InvoiceItem::from(
            $result
        ), $resourceAttributes['invoice_items'] ?? []);
        
        $item_tiers = array_map(fn (array $result): ItemTier =>  ItemTier::from(
            $result
        ), $resourceAttributes['item_tiers'] ?? []);
        
        $coupons = array_map(fn (array $result): Coupon =>  Coupon::from(
            $result
        ), $resourceAttributes['coupons'] ?? []);
        
        $coupon_applicability_mappings = array_map(fn (array $result): CouponApplicabilityMapping =>  CouponApplicabilityMapping::from(
            $result
        ), $resourceAttributes['coupon_applicability_mappings'] ?? []);
        
        $returnData = new self( $charges,
        $addons,
        $invoice_items,
        $item_tiers,
        $coupons,
        $coupon_applicability_mappings,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter([
        
        
        
        
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->charges !== []){
            $data['charges'] = array_map(
                fn (Charge $charges): array => $charges->toArray(),
                $this->charges
            );
        }
        if($this->addons !== []){
            $data['addons'] = array_map(
                fn (Addon $addons): array => $addons->toArray(),
                $this->addons
            );
        }
        if($this->invoice_items !== []){
            $data['invoice_items'] = array_map(
                fn (InvoiceItem $invoice_items): array => $invoice_items->toArray(),
                $this->invoice_items
            );
        }
        if($this->item_tiers !== []){
            $data['item_tiers'] = array_map(
                fn (ItemTier $item_tiers): array => $item_tiers->toArray(),
                $this->item_tiers
            );
        }
        if($this->coupons !== []){
            $data['coupons'] = array_map(
                fn (Coupon $coupons): array => $coupons->toArray(),
                $this->coupons
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