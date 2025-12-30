<?php

namespace Chargebee\Resources\ItemPrice;

use Chargebee\ValueObjects\SupportsCustomFields;
class ItemPrice  extends SupportsCustomFields  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $item_family_id
    */
    public ?string $item_family_id;
    
    /**
    *
    * @var ?string $item_id
    */
    public ?string $item_id;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?string $external_name
    */
    public ?string $external_name;
    
    /**
    *
    * @var ?string $price_variant_id
    */
    public ?string $price_variant_id;
    
    /**
    *
    * @var ?int $price
    */
    public ?int $price;
    
    /**
    *
    * @var ?string $price_in_decimal
    */
    public ?string $price_in_decimal;
    
    /**
    *
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $trial_period
    */
    public ?int $trial_period;
    
    /**
    *
    * @var ?int $shipping_period
    */
    public ?int $shipping_period;
    
    /**
    *
    * @var ?int $billing_cycles
    */
    public ?int $billing_cycles;
    
    /**
    *
    * @var ?int $free_quantity
    */
    public ?int $free_quantity;
    
    /**
    *
    * @var ?string $free_quantity_in_decimal
    */
    public ?string $free_quantity_in_decimal;
    
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
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
    /**
    *
    * @var ?string $invoice_notes
    */
    public ?string $invoice_notes;
    
    /**
    *
    * @var ?array<Tier> $tiers
    */
    public ?array $tiers;
    
    /**
    *
    * @var ?bool $is_taxable
    */
    public ?bool $is_taxable;
    
    /**
    *
    * @var ?TaxDetail $tax_detail
    */
    public ?TaxDetail $tax_detail;
    
    /**
    *
    * @var ?array<TaxProvidersField> $tax_providers_fields
    */
    public ?array $tax_providers_fields;
    
    /**
    *
    * @var ?AccountingDetail $accounting_detail
    */
    public ?AccountingDetail $accounting_detail;
    
    /**
    *
    * @var mixed $metadata
    */
    public mixed $metadata;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?bool $archivable
    */
    public ?bool $archivable;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $parent_item_id
    */
    public ?string $parent_item_id;
    
    /**
    *
    * @var ?bool $show_description_in_invoices
    */
    public ?bool $show_description_in_invoices;
    
    /**
    *
    * @var ?bool $show_description_in_quotes
    */
    public ?bool $show_description_in_quotes;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\PricingModel $pricing_model
    */
    public ?\Chargebee\Enums\PricingModel $pricing_model;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var ?\Chargebee\Enums\UsageAccumulationResetFrequency $usage_accumulation_reset_frequency
    */
    public ?\Chargebee\Enums\UsageAccumulationResetFrequency $usage_accumulation_reset_frequency;
    
    /**
    *
    * @var ?\Chargebee\Enums\ItemType $item_type
    */
    public ?\Chargebee\Enums\ItemType $item_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemPrice\Enums\Status $status
    */
    public ?\Chargebee\Resources\ItemPrice\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemPrice\Enums\ProrationType $proration_type
    */
    public ?\Chargebee\Resources\ItemPrice\Enums\ProrationType $proration_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemPrice\Enums\PeriodUnit $period_unit
    */
    public ?\Chargebee\Resources\ItemPrice\Enums\PeriodUnit $period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemPrice\Enums\TrialPeriodUnit $trial_period_unit
    */
    public ?\Chargebee\Resources\ItemPrice\Enums\TrialPeriodUnit $trial_period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemPrice\Enums\TrialEndAction $trial_end_action
    */
    public ?\Chargebee\Resources\ItemPrice\Enums\TrialEndAction $trial_end_action;
    
    /**
    *
    * @var ?\Chargebee\Resources\ItemPrice\Enums\ShippingPeriodUnit $shipping_period_unit
    */
    public ?\Chargebee\Resources\ItemPrice\Enums\ShippingPeriodUnit $shipping_period_unit;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "item_family_id" , "item_id" , "description" , "external_name" , "price_variant_id" , "price" , "price_in_decimal" , "period" , "currency_code" , "trial_period" , "shipping_period" , "billing_cycles" , "free_quantity" , "free_quantity_in_decimal" , "resource_version" , "updated_at" , "created_at" , "archived_at" , "invoice_notes" , "tiers" , "is_taxable" , "tax_detail" , "tax_providers_fields" , "accounting_detail" , "metadata" , "archivable" , "parent_item_id" , "show_description_in_invoices" , "show_description_in_quotes" , "deleted" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $item_family_id,
        ?string $item_id,
        ?string $description,
        ?string $external_name,
        ?string $price_variant_id,
        ?int $price,
        ?string $price_in_decimal,
        ?int $period,
        ?string $currency_code,
        ?int $trial_period,
        ?int $shipping_period,
        ?int $billing_cycles,
        ?int $free_quantity,
        ?string $free_quantity_in_decimal,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?int $archived_at,
        ?string $invoice_notes,
        ?array $tiers,
        ?bool $is_taxable,
        ?TaxDetail $tax_detail,
        ?array $tax_providers_fields,
        ?AccountingDetail $accounting_detail,
        mixed $metadata,
        ?bool $archivable,
        ?string $parent_item_id,
        ?bool $show_description_in_invoices,
        ?bool $show_description_in_quotes,
        ?bool $deleted,
        ?string $business_entity_id,
        ?\Chargebee\Enums\PricingModel $pricing_model,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Enums\UsageAccumulationResetFrequency $usage_accumulation_reset_frequency,
        ?\Chargebee\Enums\ItemType $item_type,
        ?\Chargebee\Resources\ItemPrice\Enums\Status $status,
        ?\Chargebee\Resources\ItemPrice\Enums\ProrationType $proration_type,
        ?\Chargebee\Resources\ItemPrice\Enums\PeriodUnit $period_unit,
        ?\Chargebee\Resources\ItemPrice\Enums\TrialPeriodUnit $trial_period_unit,
        ?\Chargebee\Resources\ItemPrice\Enums\TrialEndAction $trial_end_action,
        ?\Chargebee\Resources\ItemPrice\Enums\ShippingPeriodUnit $shipping_period_unit,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->item_family_id = $item_family_id;
        $this->item_id = $item_id;
        $this->description = $description;
        $this->external_name = $external_name;
        $this->price_variant_id = $price_variant_id;
        $this->price = $price;
        $this->price_in_decimal = $price_in_decimal;
        $this->period = $period;
        $this->currency_code = $currency_code;
        $this->trial_period = $trial_period;
        $this->shipping_period = $shipping_period;
        $this->billing_cycles = $billing_cycles;
        $this->free_quantity = $free_quantity;
        $this->free_quantity_in_decimal = $free_quantity_in_decimal;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
        $this->archived_at = $archived_at;
        $this->invoice_notes = $invoice_notes;
        $this->tiers = $tiers;
        $this->is_taxable = $is_taxable;
        $this->tax_detail = $tax_detail;
        $this->tax_providers_fields = $tax_providers_fields;
        $this->accounting_detail = $accounting_detail;
        $this->metadata = $metadata;
        $this->archivable = $archivable;
        $this->parent_item_id = $parent_item_id;
        $this->show_description_in_invoices = $show_description_in_invoices;
        $this->show_description_in_quotes = $show_description_in_quotes;
        $this->deleted = $deleted;
        $this->business_entity_id = $business_entity_id; 
        $this->pricing_model = $pricing_model;
        $this->channel = $channel;
        $this->usage_accumulation_reset_frequency = $usage_accumulation_reset_frequency;
        $this->item_type = $item_type; 
        $this->status = $status;
        $this->proration_type = $proration_type;
        $this->period_unit = $period_unit;
        $this->trial_period_unit = $trial_period_unit;
        $this->trial_end_action = $trial_end_action;
        $this->shipping_period_unit = $shipping_period_unit; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $tiers = array_map(fn (array $result): Tier =>  Tier::from(
            $result
        ), $resourceAttributes['tiers'] ?? []);
        
        $tax_providers_fields = array_map(fn (array $result): TaxProvidersField =>  TaxProvidersField::from(
            $result
        ), $resourceAttributes['tax_providers_fields'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['item_family_id'] ?? null,
        $resourceAttributes['item_id'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['external_name'] ?? null,
        $resourceAttributes['price_variant_id'] ?? null,
        $resourceAttributes['price'] ?? null,
        $resourceAttributes['price_in_decimal'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['trial_period'] ?? null,
        $resourceAttributes['shipping_period'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['free_quantity'] ?? null,
        $resourceAttributes['free_quantity_in_decimal'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['archived_at'] ?? null,
        $resourceAttributes['invoice_notes'] ?? null,
        $tiers,
        $resourceAttributes['is_taxable'] ?? null,
        isset($resourceAttributes['tax_detail']) ? TaxDetail::from($resourceAttributes['tax_detail']) : null,
        $tax_providers_fields,
        isset($resourceAttributes['accounting_detail']) ? AccountingDetail::from($resourceAttributes['accounting_detail']) : null,
        $resourceAttributes['metadata'] ?? null,
        $resourceAttributes['archivable'] ?? null,
        $resourceAttributes['parent_item_id'] ?? null,
        $resourceAttributes['show_description_in_invoices'] ?? null,
        $resourceAttributes['show_description_in_quotes'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        
        
        isset($resourceAttributes['pricing_model']) ? \Chargebee\Enums\PricingModel::tryFromValue($resourceAttributes['pricing_model']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
        
        isset($resourceAttributes['usage_accumulation_reset_frequency']) ? \Chargebee\Enums\UsageAccumulationResetFrequency::tryFromValue($resourceAttributes['usage_accumulation_reset_frequency']) : null,
        
        isset($resourceAttributes['item_type']) ? \Chargebee\Enums\ItemType::tryFromValue($resourceAttributes['item_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\ItemPrice\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['proration_type']) ? \Chargebee\Resources\ItemPrice\Enums\ProrationType::tryFromValue($resourceAttributes['proration_type']) : null,
        
        isset($resourceAttributes['period_unit']) ? \Chargebee\Resources\ItemPrice\Enums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        isset($resourceAttributes['trial_period_unit']) ? \Chargebee\Resources\ItemPrice\Enums\TrialPeriodUnit::tryFromValue($resourceAttributes['trial_period_unit']) : null,
        
        isset($resourceAttributes['trial_end_action']) ? \Chargebee\Resources\ItemPrice\Enums\TrialEndAction::tryFromValue($resourceAttributes['trial_end_action']) : null,
        
        isset($resourceAttributes['shipping_period_unit']) ? \Chargebee\Resources\ItemPrice\Enums\ShippingPeriodUnit::tryFromValue($resourceAttributes['shipping_period_unit']) : null,
         
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
        'item_family_id' => $this->item_family_id,
        'item_id' => $this->item_id,
        'description' => $this->description,
        'external_name' => $this->external_name,
        'price_variant_id' => $this->price_variant_id,
        'price' => $this->price,
        'price_in_decimal' => $this->price_in_decimal,
        'period' => $this->period,
        'currency_code' => $this->currency_code,
        'trial_period' => $this->trial_period,
        'shipping_period' => $this->shipping_period,
        'billing_cycles' => $this->billing_cycles,
        'free_quantity' => $this->free_quantity,
        'free_quantity_in_decimal' => $this->free_quantity_in_decimal,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        'archived_at' => $this->archived_at,
        'invoice_notes' => $this->invoice_notes,
        
        'is_taxable' => $this->is_taxable,
        
        
        
        'metadata' => $this->metadata,
        'archivable' => $this->archivable,
        'parent_item_id' => $this->parent_item_id,
        'show_description_in_invoices' => $this->show_description_in_invoices,
        'show_description_in_quotes' => $this->show_description_in_quotes,
        'deleted' => $this->deleted,
        'business_entity_id' => $this->business_entity_id,
        
        'pricing_model' => $this->pricing_model?->value,
        
        'channel' => $this->channel?->value,
        
        'usage_accumulation_reset_frequency' => $this->usage_accumulation_reset_frequency?->value,
        
        'item_type' => $this->item_type?->value,
        
        'status' => $this->status?->value,
        
        'proration_type' => $this->proration_type?->value,
        
        'period_unit' => $this->period_unit?->value,
        
        'trial_period_unit' => $this->trial_period_unit?->value,
        
        'trial_end_action' => $this->trial_end_action?->value,
        
        'shipping_period_unit' => $this->shipping_period_unit?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->tax_detail instanceof TaxDetail){
            $data['tax_detail'] = $this->tax_detail->toArray();
        }
        if($this->accounting_detail instanceof AccountingDetail){
            $data['accounting_detail'] = $this->accounting_detail->toArray();
        }
        
        if($this->tiers !== []){
            $data['tiers'] = array_map(
                fn (Tier $tiers): array => $tiers->toArray(),
                $this->tiers
            );
        }
        if($this->tax_providers_fields !== []){
            $data['tax_providers_fields'] = array_map(
                fn (TaxProvidersField $tax_providers_fields): array => $tax_providers_fields->toArray(),
                $this->tax_providers_fields
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