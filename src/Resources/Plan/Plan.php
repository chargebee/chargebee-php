<?php

namespace Chargebee\Resources\Plan;

use Chargebee\ValueObjects\SupportsCustomFields;
class Plan  extends SupportsCustomFields  { 
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
    * @var ?string $invoice_name
    */
    public ?string $invoice_name;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?int $price
    */
    public ?int $price;
    
    /**
    *
    * @var string $currency_code
    */
    public string $currency_code;
    
    /**
    *
    * @var int $period
    */
    public int $period;
    
    /**
    *
    * @var ?int $trial_period
    */
    public ?int $trial_period;
    
    /**
    *
    * @var int $free_quantity
    */
    public int $free_quantity;
    
    /**
    *
    * @var ?int $setup_cost
    */
    public ?int $setup_cost;
    
    /**
    *
    * @var ?int $downgrade_penalty
    */
    public ?int $downgrade_penalty;
    
    /**
    *
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
    /**
    *
    * @var ?int $billing_cycles
    */
    public ?int $billing_cycles;
    
    /**
    *
    * @var ?string $redirect_url
    */
    public ?string $redirect_url;
    
    /**
    *
    * @var bool $enabled_in_hosted_pages
    */
    public bool $enabled_in_hosted_pages;
    
    /**
    *
    * @var bool $enabled_in_portal
    */
    public bool $enabled_in_portal;
    
    /**
    *
    * @var ?string $tax_code
    */
    public ?string $tax_code;
    
    /**
    *
    * @var ?string $hsn_code
    */
    public ?string $hsn_code;
    
    /**
    *
    * @var ?string $taxjar_product_code
    */
    public ?string $taxjar_product_code;
    
    /**
    *
    * @var ?int $avalara_transaction_type
    */
    public ?int $avalara_transaction_type;
    
    /**
    *
    * @var ?int $avalara_service_type
    */
    public ?int $avalara_service_type;
    
    /**
    *
    * @var ?string $sku
    */
    public ?string $sku;
    
    /**
    *
    * @var ?string $accounting_code
    */
    public ?string $accounting_code;
    
    /**
    *
    * @var ?string $accounting_category1
    */
    public ?string $accounting_category1;
    
    /**
    *
    * @var ?string $accounting_category2
    */
    public ?string $accounting_category2;
    
    /**
    *
    * @var ?string $accounting_category3
    */
    public ?string $accounting_category3;
    
    /**
    *
    * @var ?string $accounting_category4
    */
    public ?string $accounting_category4;
    
    /**
    *
    * @var ?bool $is_shippable
    */
    public ?bool $is_shippable;
    
    /**
    *
    * @var ?int $shipping_frequency_period
    */
    public ?int $shipping_frequency_period;
    
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
    * @var bool $giftable
    */
    public bool $giftable;
    
    /**
    *
    * @var ?string $claim_url
    */
    public ?string $claim_url;
    
    /**
    *
    * @var ?string $free_quantity_in_decimal
    */
    public ?string $free_quantity_in_decimal;
    
    /**
    *
    * @var ?string $price_in_decimal
    */
    public ?string $price_in_decimal;
    
    /**
    *
    * @var ?string $invoice_notes
    */
    public ?string $invoice_notes;
    
    /**
    *
    * @var ?bool $taxable
    */
    public ?bool $taxable;
    
    /**
    *
    * @var ?string $tax_profile_id
    */
    public ?string $tax_profile_id;
    
    /**
    *
    * @var mixed $meta_data
    */
    public mixed $meta_data;
    
    /**
    *
    * @var ?array<Tier> $tiers
    */
    public ?array $tiers;
    
    /**
    *
    * @var ?array<TaxProvidersField> $tax_providers_fields
    */
    public ?array $tax_providers_fields;
    
    /**
    *
    * @var ?array<ApplicableAddon> $applicable_addons
    */
    public ?array $applicable_addons;
    
    /**
    *
    * @var ?array<AttachedAddon> $attached_addons
    */
    public ?array $attached_addons;
    
    /**
    *
    * @var ?array<EventBasedAddon> $event_based_addons
    */
    public ?array $event_based_addons;
    
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
    * @var \Chargebee\Enums\PricingModel $pricing_model
    */
    public \Chargebee\Enums\PricingModel $pricing_model;
    
    /**
    *
    * @var ?\Chargebee\Enums\AvalaraSaleType $avalara_sale_type
    */
    public ?\Chargebee\Enums\AvalaraSaleType $avalara_sale_type;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var \Chargebee\Resources\Plan\Enums\PeriodUnit $period_unit
    */
    public \Chargebee\Resources\Plan\Enums\PeriodUnit $period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\Plan\Enums\TrialPeriodUnit $trial_period_unit
    */
    public ?\Chargebee\Resources\Plan\Enums\TrialPeriodUnit $trial_period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\Plan\Enums\TrialEndAction $trial_end_action
    */
    public ?\Chargebee\Resources\Plan\Enums\TrialEndAction $trial_end_action;
    
    /**
    *
    * @var \Chargebee\Resources\Plan\Enums\ChargeModel $charge_model
    */
    public \Chargebee\Resources\Plan\Enums\ChargeModel $charge_model;
    
    /**
    *
    * @var \Chargebee\Resources\Plan\Enums\Status $status
    */
    public \Chargebee\Resources\Plan\Enums\Status $status;
    
    /**
    *
    * @var \Chargebee\Resources\Plan\Enums\AddonApplicability $addon_applicability
    */
    public \Chargebee\Resources\Plan\Enums\AddonApplicability $addon_applicability;
    
    /**
    *
    * @var ?\Chargebee\Resources\Plan\Enums\ShippingFrequencyPeriodUnit $shipping_frequency_period_unit
    */
    public ?\Chargebee\Resources\Plan\Enums\ShippingFrequencyPeriodUnit $shipping_frequency_period_unit;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "invoice_name" , "description" , "price" , "currency_code" , "period" , "trial_period" , "free_quantity" , "setup_cost" , "downgrade_penalty" , "archived_at" , "billing_cycles" , "redirect_url" , "enabled_in_hosted_pages" , "enabled_in_portal" , "tax_code" , "hsn_code" , "taxjar_product_code" , "avalara_transaction_type" , "avalara_service_type" , "sku" , "accounting_code" , "accounting_category1" , "accounting_category2" , "accounting_category3" , "accounting_category4" , "is_shippable" , "shipping_frequency_period" , "resource_version" , "updated_at" , "giftable" , "claim_url" , "free_quantity_in_decimal" , "price_in_decimal" , "invoice_notes" , "taxable" , "tax_profile_id" , "meta_data" , "tiers" , "tax_providers_fields" , "applicable_addons" , "attached_addons" , "event_based_addons" , "show_description_in_invoices" , "show_description_in_quotes"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $name,
        ?string $invoice_name,
        ?string $description,
        ?int $price,
        string $currency_code,
        int $period,
        ?int $trial_period,
        int $free_quantity,
        ?int $setup_cost,
        ?int $downgrade_penalty,
        ?int $archived_at,
        ?int $billing_cycles,
        ?string $redirect_url,
        bool $enabled_in_hosted_pages,
        bool $enabled_in_portal,
        ?string $tax_code,
        ?string $hsn_code,
        ?string $taxjar_product_code,
        ?int $avalara_transaction_type,
        ?int $avalara_service_type,
        ?string $sku,
        ?string $accounting_code,
        ?string $accounting_category1,
        ?string $accounting_category2,
        ?string $accounting_category3,
        ?string $accounting_category4,
        ?bool $is_shippable,
        ?int $shipping_frequency_period,
        ?int $resource_version,
        ?int $updated_at,
        bool $giftable,
        ?string $claim_url,
        ?string $free_quantity_in_decimal,
        ?string $price_in_decimal,
        ?string $invoice_notes,
        ?bool $taxable,
        ?string $tax_profile_id,
        mixed $meta_data,
        ?array $tiers,
        ?array $tax_providers_fields,
        ?array $applicable_addons,
        ?array $attached_addons,
        ?array $event_based_addons,
        ?bool $show_description_in_invoices,
        ?bool $show_description_in_quotes,
        \Chargebee\Enums\PricingModel $pricing_model,
        ?\Chargebee\Enums\AvalaraSaleType $avalara_sale_type,
        ?\Chargebee\Enums\Channel $channel,
        \Chargebee\Resources\Plan\Enums\PeriodUnit $period_unit,
        ?\Chargebee\Resources\Plan\Enums\TrialPeriodUnit $trial_period_unit,
        ?\Chargebee\Resources\Plan\Enums\TrialEndAction $trial_end_action,
        \Chargebee\Resources\Plan\Enums\ChargeModel $charge_model,
        \Chargebee\Resources\Plan\Enums\Status $status,
        \Chargebee\Resources\Plan\Enums\AddonApplicability $addon_applicability,
        ?\Chargebee\Resources\Plan\Enums\ShippingFrequencyPeriodUnit $shipping_frequency_period_unit,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->invoice_name = $invoice_name;
        $this->description = $description;
        $this->price = $price;
        $this->currency_code = $currency_code;
        $this->period = $period;
        $this->trial_period = $trial_period;
        $this->free_quantity = $free_quantity;
        $this->setup_cost = $setup_cost;
        $this->downgrade_penalty = $downgrade_penalty;
        $this->archived_at = $archived_at;
        $this->billing_cycles = $billing_cycles;
        $this->redirect_url = $redirect_url;
        $this->enabled_in_hosted_pages = $enabled_in_hosted_pages;
        $this->enabled_in_portal = $enabled_in_portal;
        $this->tax_code = $tax_code;
        $this->hsn_code = $hsn_code;
        $this->taxjar_product_code = $taxjar_product_code;
        $this->avalara_transaction_type = $avalara_transaction_type;
        $this->avalara_service_type = $avalara_service_type;
        $this->sku = $sku;
        $this->accounting_code = $accounting_code;
        $this->accounting_category1 = $accounting_category1;
        $this->accounting_category2 = $accounting_category2;
        $this->accounting_category3 = $accounting_category3;
        $this->accounting_category4 = $accounting_category4;
        $this->is_shippable = $is_shippable;
        $this->shipping_frequency_period = $shipping_frequency_period;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->giftable = $giftable;
        $this->claim_url = $claim_url;
        $this->free_quantity_in_decimal = $free_quantity_in_decimal;
        $this->price_in_decimal = $price_in_decimal;
        $this->invoice_notes = $invoice_notes;
        $this->taxable = $taxable;
        $this->tax_profile_id = $tax_profile_id;
        $this->meta_data = $meta_data;
        $this->tiers = $tiers;
        $this->tax_providers_fields = $tax_providers_fields;
        $this->applicable_addons = $applicable_addons;
        $this->attached_addons = $attached_addons;
        $this->event_based_addons = $event_based_addons;
        $this->show_description_in_invoices = $show_description_in_invoices;
        $this->show_description_in_quotes = $show_description_in_quotes; 
        $this->pricing_model = $pricing_model;
        $this->avalara_sale_type = $avalara_sale_type;
        $this->channel = $channel; 
        $this->period_unit = $period_unit;
        $this->trial_period_unit = $trial_period_unit;
        $this->trial_end_action = $trial_end_action;
        $this->charge_model = $charge_model;
        $this->status = $status;
        $this->addon_applicability = $addon_applicability;
        $this->shipping_frequency_period_unit = $shipping_frequency_period_unit;
    }

    public static function from(array $resourceAttributes): self
    { 
        $tiers = array_map(fn (array $result): Tier =>  Tier::from(
            $result
        ), $resourceAttributes['tiers'] ?? []);
        
        $tax_providers_fields = array_map(fn (array $result): TaxProvidersField =>  TaxProvidersField::from(
            $result
        ), $resourceAttributes['tax_providers_fields'] ?? []);
        
        $applicable_addons = array_map(fn (array $result): ApplicableAddon =>  ApplicableAddon::from(
            $result
        ), $resourceAttributes['applicable_addons'] ?? []);
        
        $attached_addons = array_map(fn (array $result): AttachedAddon =>  AttachedAddon::from(
            $result
        ), $resourceAttributes['attached_addons'] ?? []);
        
        $event_based_addons = array_map(fn (array $result): EventBasedAddon =>  EventBasedAddon::from(
            $result
        ), $resourceAttributes['event_based_addons'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['name'] ,
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['price'] ?? null,
        $resourceAttributes['currency_code'] ,
        $resourceAttributes['period'] ,
        $resourceAttributes['trial_period'] ?? null,
        $resourceAttributes['free_quantity'] ,
        $resourceAttributes['setup_cost'] ?? null,
        $resourceAttributes['downgrade_penalty'] ?? null,
        $resourceAttributes['archived_at'] ?? null,
        $resourceAttributes['billing_cycles'] ?? null,
        $resourceAttributes['redirect_url'] ?? null,
        $resourceAttributes['enabled_in_hosted_pages'] ,
        $resourceAttributes['enabled_in_portal'] ,
        $resourceAttributes['tax_code'] ?? null,
        $resourceAttributes['hsn_code'] ?? null,
        $resourceAttributes['taxjar_product_code'] ?? null,
        $resourceAttributes['avalara_transaction_type'] ?? null,
        $resourceAttributes['avalara_service_type'] ?? null,
        $resourceAttributes['sku'] ?? null,
        $resourceAttributes['accounting_code'] ?? null,
        $resourceAttributes['accounting_category1'] ?? null,
        $resourceAttributes['accounting_category2'] ?? null,
        $resourceAttributes['accounting_category3'] ?? null,
        $resourceAttributes['accounting_category4'] ?? null,
        $resourceAttributes['is_shippable'] ?? null,
        $resourceAttributes['shipping_frequency_period'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['giftable'] ,
        $resourceAttributes['claim_url'] ?? null,
        $resourceAttributes['free_quantity_in_decimal'] ?? null,
        $resourceAttributes['price_in_decimal'] ?? null,
        $resourceAttributes['invoice_notes'] ?? null,
        $resourceAttributes['taxable'] ?? null,
        $resourceAttributes['tax_profile_id'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        $tiers,
        $tax_providers_fields,
        $applicable_addons,
        $attached_addons,
        $event_based_addons,
        $resourceAttributes['show_description_in_invoices'] ?? null,
        $resourceAttributes['show_description_in_quotes'] ?? null,
        
        
        isset($resourceAttributes['pricing_model']) ? \Chargebee\Enums\PricingModel::tryFromValue($resourceAttributes['pricing_model']) : null,
        
        isset($resourceAttributes['avalara_sale_type']) ? \Chargebee\Enums\AvalaraSaleType::tryFromValue($resourceAttributes['avalara_sale_type']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['period_unit']) ? \Chargebee\Resources\Plan\Enums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        isset($resourceAttributes['trial_period_unit']) ? \Chargebee\Resources\Plan\Enums\TrialPeriodUnit::tryFromValue($resourceAttributes['trial_period_unit']) : null,
        
        isset($resourceAttributes['trial_end_action']) ? \Chargebee\Resources\Plan\Enums\TrialEndAction::tryFromValue($resourceAttributes['trial_end_action']) : null,
        
        isset($resourceAttributes['charge_model']) ? \Chargebee\Resources\Plan\Enums\ChargeModel::tryFromValue($resourceAttributes['charge_model']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Plan\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['addon_applicability']) ? \Chargebee\Resources\Plan\Enums\AddonApplicability::tryFromValue($resourceAttributes['addon_applicability']) : null,
        
        isset($resourceAttributes['shipping_frequency_period_unit']) ? \Chargebee\Resources\Plan\Enums\ShippingFrequencyPeriodUnit::tryFromValue($resourceAttributes['shipping_frequency_period_unit']) : null,
        
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
        'invoice_name' => $this->invoice_name,
        'description' => $this->description,
        'price' => $this->price,
        'currency_code' => $this->currency_code,
        'period' => $this->period,
        'trial_period' => $this->trial_period,
        'free_quantity' => $this->free_quantity,
        'setup_cost' => $this->setup_cost,
        'downgrade_penalty' => $this->downgrade_penalty,
        'archived_at' => $this->archived_at,
        'billing_cycles' => $this->billing_cycles,
        'redirect_url' => $this->redirect_url,
        'enabled_in_hosted_pages' => $this->enabled_in_hosted_pages,
        'enabled_in_portal' => $this->enabled_in_portal,
        'tax_code' => $this->tax_code,
        'hsn_code' => $this->hsn_code,
        'taxjar_product_code' => $this->taxjar_product_code,
        'avalara_transaction_type' => $this->avalara_transaction_type,
        'avalara_service_type' => $this->avalara_service_type,
        'sku' => $this->sku,
        'accounting_code' => $this->accounting_code,
        'accounting_category1' => $this->accounting_category1,
        'accounting_category2' => $this->accounting_category2,
        'accounting_category3' => $this->accounting_category3,
        'accounting_category4' => $this->accounting_category4,
        'is_shippable' => $this->is_shippable,
        'shipping_frequency_period' => $this->shipping_frequency_period,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'giftable' => $this->giftable,
        'claim_url' => $this->claim_url,
        'free_quantity_in_decimal' => $this->free_quantity_in_decimal,
        'price_in_decimal' => $this->price_in_decimal,
        'invoice_notes' => $this->invoice_notes,
        'taxable' => $this->taxable,
        'tax_profile_id' => $this->tax_profile_id,
        'meta_data' => $this->meta_data,
        
        
        
        
        
        'show_description_in_invoices' => $this->show_description_in_invoices,
        'show_description_in_quotes' => $this->show_description_in_quotes,
        
        'pricing_model' => $this->pricing_model?->value,
        
        'avalara_sale_type' => $this->avalara_sale_type?->value,
        
        'channel' => $this->channel?->value,
        
        'period_unit' => $this->period_unit?->value,
        
        'trial_period_unit' => $this->trial_period_unit?->value,
        
        'trial_end_action' => $this->trial_end_action?->value,
        
        'charge_model' => $this->charge_model?->value,
        
        'status' => $this->status?->value,
        
        'addon_applicability' => $this->addon_applicability?->value,
        
        'shipping_frequency_period_unit' => $this->shipping_frequency_period_unit?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
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
        if($this->applicable_addons !== []){
            $data['applicable_addons'] = array_map(
                fn (ApplicableAddon $applicable_addons): array => $applicable_addons->toArray(),
                $this->applicable_addons
            );
        }
        if($this->attached_addons !== []){
            $data['attached_addons'] = array_map(
                fn (AttachedAddon $attached_addons): array => $attached_addons->toArray(),
                $this->attached_addons
            );
        }
        if($this->event_based_addons !== []){
            $data['event_based_addons'] = array_map(
                fn (EventBasedAddon $event_based_addons): array => $event_based_addons->toArray(),
                $this->event_based_addons
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