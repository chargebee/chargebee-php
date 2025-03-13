<?php

namespace Chargebee\Resources\Item;

use Chargebee\ValueObjects\SupportsCustomFields;
class Item  extends SupportsCustomFields  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var string $name
    */
    public string $name;
    
    /**
    *
    * @var ?string $external_name
    */
    public ?string $external_name;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
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
    * @var ?string $item_family_id
    */
    public ?string $item_family_id;
    
    /**
    *
    * @var ?bool $is_shippable
    */
    public ?bool $is_shippable;
    
    /**
    *
    * @var bool $is_giftable
    */
    public bool $is_giftable;
    
    /**
    *
    * @var ?string $redirect_url
    */
    public ?string $redirect_url;
    
    /**
    *
    * @var bool $enabled_for_checkout
    */
    public bool $enabled_for_checkout;
    
    /**
    *
    * @var bool $enabled_in_portal
    */
    public bool $enabled_in_portal;
    
    /**
    *
    * @var ?bool $included_in_mrr
    */
    public ?bool $included_in_mrr;
    
    /**
    *
    * @var ?string $gift_claim_redirect_url
    */
    public ?string $gift_claim_redirect_url;
    
    /**
    *
    * @var ?string $unit
    */
    public ?string $unit;
    
    /**
    *
    * @var bool $metered
    */
    public bool $metered;
    
    /**
    *
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
    /**
    *
    * @var ?array<ApplicableItem> $applicable_items
    */
    public ?array $applicable_items;
    
    /**
    *
    * @var ?array<BundleItem> $bundle_items
    */
    public ?array $bundle_items;
    
    /**
    *
    * @var ?BundleConfiguration $bundle_configuration
    */
    public ?BundleConfiguration $bundle_configuration;
    
    /**
    *
    * @var mixed $metadata
    */
    public mixed $metadata;
    
    /**
    *
    * @var bool $deleted
    */
    public bool $deleted;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var ?\Chargebee\Resources\Item\Enums\Status $status
    */
    public ?\Chargebee\Resources\Item\Enums\Status $status;
    
    /**
    *
    * @var \Chargebee\Resources\Item\Enums\Type $type
    */
    public \Chargebee\Resources\Item\Enums\Type $type;
    
    /**
    *
    * @var \Chargebee\Resources\Item\Enums\ItemApplicability $item_applicability
    */
    public \Chargebee\Resources\Item\Enums\ItemApplicability $item_applicability;
    
    /**
    *
    * @var ?\Chargebee\Resources\Item\Enums\UsageCalculation $usage_calculation
    */
    public ?\Chargebee\Resources\Item\Enums\UsageCalculation $usage_calculation;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "external_name" , "description" , "resource_version" , "updated_at" , "item_family_id" , "is_shippable" , "is_giftable" , "redirect_url" , "enabled_for_checkout" , "enabled_in_portal" , "included_in_mrr" , "gift_claim_redirect_url" , "unit" , "metered" , "archived_at" , "applicable_items" , "bundle_items" , "bundle_configuration" , "metadata" , "deleted" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $name,
        ?string $external_name,
        ?string $description,
        ?int $resource_version,
        ?int $updated_at,
        ?string $item_family_id,
        ?bool $is_shippable,
        bool $is_giftable,
        ?string $redirect_url,
        bool $enabled_for_checkout,
        bool $enabled_in_portal,
        ?bool $included_in_mrr,
        ?string $gift_claim_redirect_url,
        ?string $unit,
        bool $metered,
        ?int $archived_at,
        ?array $applicable_items,
        ?array $bundle_items,
        ?BundleConfiguration $bundle_configuration,
        mixed $metadata,
        bool $deleted,
        ?string $business_entity_id,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Resources\Item\Enums\Status $status,
        \Chargebee\Resources\Item\Enums\Type $type,
        \Chargebee\Resources\Item\Enums\ItemApplicability $item_applicability,
        ?\Chargebee\Resources\Item\Enums\UsageCalculation $usage_calculation,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->external_name = $external_name;
        $this->description = $description;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->item_family_id = $item_family_id;
        $this->is_shippable = $is_shippable;
        $this->is_giftable = $is_giftable;
        $this->redirect_url = $redirect_url;
        $this->enabled_for_checkout = $enabled_for_checkout;
        $this->enabled_in_portal = $enabled_in_portal;
        $this->included_in_mrr = $included_in_mrr;
        $this->gift_claim_redirect_url = $gift_claim_redirect_url;
        $this->unit = $unit;
        $this->metered = $metered;
        $this->archived_at = $archived_at;
        $this->applicable_items = $applicable_items;
        $this->bundle_items = $bundle_items;
        $this->bundle_configuration = $bundle_configuration;
        $this->metadata = $metadata;
        $this->deleted = $deleted;
        $this->business_entity_id = $business_entity_id; 
        $this->channel = $channel; 
        $this->status = $status;
        $this->type = $type;
        $this->item_applicability = $item_applicability;
        $this->usage_calculation = $usage_calculation;
    }

    public static function from(array $resourceAttributes): self
    { 
        $applicable_items = array_map(fn (array $result): ApplicableItem =>  ApplicableItem::from(
            $result
        ), $resourceAttributes['applicable_items'] ?? []);
        
        $bundle_items = array_map(fn (array $result): BundleItem =>  BundleItem::from(
            $result
        ), $resourceAttributes['bundle_items'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['name'] ,
        $resourceAttributes['external_name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['item_family_id'] ?? null,
        $resourceAttributes['is_shippable'] ?? null,
        $resourceAttributes['is_giftable'] ,
        $resourceAttributes['redirect_url'] ?? null,
        $resourceAttributes['enabled_for_checkout'] ,
        $resourceAttributes['enabled_in_portal'] ,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['gift_claim_redirect_url'] ?? null,
        $resourceAttributes['unit'] ?? null,
        $resourceAttributes['metered'] ,
        $resourceAttributes['archived_at'] ?? null,
        $applicable_items,
        $bundle_items,
        isset($resourceAttributes['bundle_configuration']) ? BundleConfiguration::from($resourceAttributes['bundle_configuration']) : null,
        $resourceAttributes['metadata'] ?? null,
        $resourceAttributes['deleted'] ,
        $resourceAttributes['business_entity_id'] ?? null,
        
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Item\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Item\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['item_applicability']) ? \Chargebee\Resources\Item\Enums\ItemApplicability::tryFromValue($resourceAttributes['item_applicability']) : null,
        
        isset($resourceAttributes['usage_calculation']) ? \Chargebee\Resources\Item\Enums\UsageCalculation::tryFromValue($resourceAttributes['usage_calculation']) : null,
        
        );
       foreach ($resourceAttributes as $key => $value) {
            if (!in_array($key, $returnData::$knownFields, true)) {
                $returnData->__set($key, $value);
            }
        } 
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'external_name' => $this->external_name,
        'description' => $this->description,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'item_family_id' => $this->item_family_id,
        'is_shippable' => $this->is_shippable,
        'is_giftable' => $this->is_giftable,
        'redirect_url' => $this->redirect_url,
        'enabled_for_checkout' => $this->enabled_for_checkout,
        'enabled_in_portal' => $this->enabled_in_portal,
        'included_in_mrr' => $this->included_in_mrr,
        'gift_claim_redirect_url' => $this->gift_claim_redirect_url,
        'unit' => $this->unit,
        'metered' => $this->metered,
        'archived_at' => $this->archived_at,
        
        
        
        'metadata' => $this->metadata,
        'deleted' => $this->deleted,
        'business_entity_id' => $this->business_entity_id,
        
        'channel' => $this->channel?->value,
        
        'status' => $this->status?->value,
        
        'type' => $this->type?->value,
        
        'item_applicability' => $this->item_applicability?->value,
        
        'usage_calculation' => $this->usage_calculation?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->bundle_configuration instanceof BundleConfiguration){
            $data['bundle_configuration'] = $this->bundle_configuration->toArray();
        }
        
        if($this->applicable_items !== []){
            $data['applicable_items'] = array_map(
                fn (ApplicableItem $applicable_items): array => $applicable_items->toArray(),
                $this->applicable_items
            );
        }
        if($this->bundle_items !== []){
            $data['bundle_items'] = array_map(
                fn (BundleItem $bundle_items): array => $bundle_items->toArray(),
                $this->bundle_items
            );
        }

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>