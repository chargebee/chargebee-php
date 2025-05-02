<?php

namespace Chargebee\Resources\Ramp;

class Ramp  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?int $effective_from
    */
    public ?int $effective_from;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
    /**
    *
    * @var ?array<ItemsToAdd> $items_to_add
    */
    public ?array $items_to_add;
    
    /**
    *
    * @var ?array<ItemsToUpdate> $items_to_update
    */
    public ?array $items_to_update;
    
    /**
    *
    * @var ?array<CouponsToAdd> $coupons_to_add
    */
    public ?array $coupons_to_add;
    
    /**
    *
    * @var ?array<DiscountsToAdd> $discounts_to_add
    */
    public ?array $discounts_to_add;
    
    /**
    *
    * @var ?array<ItemTier> $item_tiers
    */
    public ?array $item_tiers;
    
    /**
    *
    * @var ?string $items_to_remove
    */
    public ?string $items_to_remove;
    
    /**
    *
    * @var ?string $coupons_to_remove
    */
    public ?string $coupons_to_remove;
    
    /**
    *
    * @var ?string $discounts_to_remove
    */
    public ?string $discounts_to_remove;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?StatusTransitionReason $status_transition_reason
    */
    public ?StatusTransitionReason $status_transition_reason;
    
    /**
    *
    * @var ?\Chargebee\Resources\Ramp\Enums\Status $status
    */
    public ?\Chargebee\Resources\Ramp\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "description" , "subscription_id" , "effective_from" , "created_at" , "resource_version" , "updated_at" , "items_to_add" , "items_to_update" , "coupons_to_add" , "discounts_to_add" , "item_tiers" , "items_to_remove" , "coupons_to_remove" , "discounts_to_remove" , "deleted" , "status_transition_reason"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $description,
        ?string $subscription_id,
        ?int $effective_from,
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?array $items_to_add,
        ?array $items_to_update,
        ?array $coupons_to_add,
        ?array $discounts_to_add,
        ?array $item_tiers,
        ?string $items_to_remove,
        ?string $coupons_to_remove,
        ?string $discounts_to_remove,
        ?bool $deleted,
        ?StatusTransitionReason $status_transition_reason,
        ?\Chargebee\Resources\Ramp\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->description = $description;
        $this->subscription_id = $subscription_id;
        $this->effective_from = $effective_from;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->items_to_add = $items_to_add;
        $this->items_to_update = $items_to_update;
        $this->coupons_to_add = $coupons_to_add;
        $this->discounts_to_add = $discounts_to_add;
        $this->item_tiers = $item_tiers;
        $this->items_to_remove = $items_to_remove;
        $this->coupons_to_remove = $coupons_to_remove;
        $this->discounts_to_remove = $discounts_to_remove;
        $this->deleted = $deleted;
        $this->status_transition_reason = $status_transition_reason;  
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $items_to_add = array_map(fn (array $result): ItemsToAdd =>  ItemsToAdd::from(
            $result
        ), $resourceAttributes['items_to_add'] ?? []);
        
        $items_to_update = array_map(fn (array $result): ItemsToUpdate =>  ItemsToUpdate::from(
            $result
        ), $resourceAttributes['items_to_update'] ?? []);
        
        $coupons_to_add = array_map(fn (array $result): CouponsToAdd =>  CouponsToAdd::from(
            $result
        ), $resourceAttributes['coupons_to_add'] ?? []);
        
        $discounts_to_add = array_map(fn (array $result): DiscountsToAdd =>  DiscountsToAdd::from(
            $result
        ), $resourceAttributes['discounts_to_add'] ?? []);
        
        $item_tiers = array_map(fn (array $result): ItemTier =>  ItemTier::from(
            $result
        ), $resourceAttributes['item_tiers'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['effective_from'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $items_to_add,
        $items_to_update,
        $coupons_to_add,
        $discounts_to_add,
        $item_tiers,
        $resourceAttributes['items_to_remove'] ?? null,
        $resourceAttributes['coupons_to_remove'] ?? null,
        $resourceAttributes['discounts_to_remove'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        isset($resourceAttributes['status_transition_reason']) ? StatusTransitionReason::from($resourceAttributes['status_transition_reason']) : null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Ramp\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'description' => $this->description,
        'subscription_id' => $this->subscription_id,
        'effective_from' => $this->effective_from,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        
        
        
        
        
        'items_to_remove' => $this->items_to_remove,
        'coupons_to_remove' => $this->coupons_to_remove,
        'discounts_to_remove' => $this->discounts_to_remove,
        'deleted' => $this->deleted,
        
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->status_transition_reason instanceof StatusTransitionReason){
            $data['status_transition_reason'] = $this->status_transition_reason->toArray();
        }
        
        if($this->items_to_add !== []){
            $data['items_to_add'] = array_map(
                fn (ItemsToAdd $items_to_add): array => $items_to_add->toArray(),
                $this->items_to_add
            );
        }
        if($this->items_to_update !== []){
            $data['items_to_update'] = array_map(
                fn (ItemsToUpdate $items_to_update): array => $items_to_update->toArray(),
                $this->items_to_update
            );
        }
        if($this->coupons_to_add !== []){
            $data['coupons_to_add'] = array_map(
                fn (CouponsToAdd $coupons_to_add): array => $coupons_to_add->toArray(),
                $this->coupons_to_add
            );
        }
        if($this->discounts_to_add !== []){
            $data['discounts_to_add'] = array_map(
                fn (DiscountsToAdd $discounts_to_add): array => $discounts_to_add->toArray(),
                $this->discounts_to_add
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