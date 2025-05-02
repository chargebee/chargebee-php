<?php

namespace Chargebee\Resources\Addon;

use Chargebee\ValueObjects\SupportsCustomFields;
class Addon  extends SupportsCustomFields  { 
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
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var ?string $unit
    */
    public ?string $unit;
    
    /**
    *
    * @var ?int $archived_at
    */
    public ?int $archived_at;
    
    /**
    *
    * @var ?bool $enabled_in_portal
    */
    public ?bool $enabled_in_portal;
    
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
    * @var ?string $price_in_decimal
    */
    public ?string $price_in_decimal;
    
    /**
    *
    * @var ?bool $included_in_mrr
    */
    public ?bool $included_in_mrr;
    
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
    * @var ?\Chargebee\Enums\PricingModel $pricing_model
    */
    public ?\Chargebee\Enums\PricingModel $pricing_model;
    
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
    * @var ?\Chargebee\Resources\Addon\Enums\Type $type
    */
    public ?\Chargebee\Resources\Addon\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Addon\Enums\ChargeType $charge_type
    */
    public ?\Chargebee\Resources\Addon\Enums\ChargeType $charge_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Addon\Enums\PeriodUnit $period_unit
    */
    public ?\Chargebee\Resources\Addon\Enums\PeriodUnit $period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\Addon\Enums\Status $status
    */
    public ?\Chargebee\Resources\Addon\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Addon\Enums\ShippingFrequencyPeriodUnit $shipping_frequency_period_unit
    */
    public ?\Chargebee\Resources\Addon\Enums\ShippingFrequencyPeriodUnit $shipping_frequency_period_unit;
    
    /**
    *
    * @var ?\Chargebee\Resources\Addon\Enums\ProrationType $proration_type
    */
    public ?\Chargebee\Resources\Addon\Enums\ProrationType $proration_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "invoice_name" , "description" , "price" , "currency_code" , "period" , "unit" , "archived_at" , "enabled_in_portal" , "tax_code" , "hsn_code" , "taxjar_product_code" , "avalara_transaction_type" , "avalara_service_type" , "sku" , "accounting_code" , "accounting_category1" , "accounting_category2" , "accounting_category3" , "accounting_category4" , "is_shippable" , "shipping_frequency_period" , "resource_version" , "updated_at" , "price_in_decimal" , "included_in_mrr" , "invoice_notes" , "taxable" , "tax_profile_id" , "meta_data" , "tiers" , "tax_providers_fields" , "show_description_in_invoices" , "show_description_in_quotes"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $invoice_name,
        ?string $description,
        ?int $price,
        ?string $currency_code,
        ?int $period,
        ?string $unit,
        ?int $archived_at,
        ?bool $enabled_in_portal,
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
        ?string $price_in_decimal,
        ?bool $included_in_mrr,
        ?string $invoice_notes,
        ?bool $taxable,
        ?string $tax_profile_id,
        mixed $meta_data,
        ?array $tiers,
        ?array $tax_providers_fields,
        ?bool $show_description_in_invoices,
        ?bool $show_description_in_quotes,
        ?\Chargebee\Enums\PricingModel $pricing_model,
        ?\Chargebee\Enums\AvalaraSaleType $avalara_sale_type,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Resources\Addon\Enums\Type $type,
        ?\Chargebee\Resources\Addon\Enums\ChargeType $charge_type,
        ?\Chargebee\Resources\Addon\Enums\PeriodUnit $period_unit,
        ?\Chargebee\Resources\Addon\Enums\Status $status,
        ?\Chargebee\Resources\Addon\Enums\ShippingFrequencyPeriodUnit $shipping_frequency_period_unit,
        ?\Chargebee\Resources\Addon\Enums\ProrationType $proration_type,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->invoice_name = $invoice_name;
        $this->description = $description;
        $this->price = $price;
        $this->currency_code = $currency_code;
        $this->period = $period;
        $this->unit = $unit;
        $this->archived_at = $archived_at;
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
        $this->price_in_decimal = $price_in_decimal;
        $this->included_in_mrr = $included_in_mrr;
        $this->invoice_notes = $invoice_notes;
        $this->taxable = $taxable;
        $this->tax_profile_id = $tax_profile_id;
        $this->meta_data = $meta_data;
        $this->tiers = $tiers;
        $this->tax_providers_fields = $tax_providers_fields;
        $this->show_description_in_invoices = $show_description_in_invoices;
        $this->show_description_in_quotes = $show_description_in_quotes; 
        $this->pricing_model = $pricing_model;
        $this->avalara_sale_type = $avalara_sale_type;
        $this->channel = $channel; 
        $this->type = $type;
        $this->charge_type = $charge_type;
        $this->period_unit = $period_unit;
        $this->status = $status;
        $this->shipping_frequency_period_unit = $shipping_frequency_period_unit;
        $this->proration_type = $proration_type;
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
        $resourceAttributes['invoice_name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['price'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['unit'] ?? null,
        $resourceAttributes['archived_at'] ?? null,
        $resourceAttributes['enabled_in_portal'] ?? null,
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
        $resourceAttributes['price_in_decimal'] ?? null,
        $resourceAttributes['included_in_mrr'] ?? null,
        $resourceAttributes['invoice_notes'] ?? null,
        $resourceAttributes['taxable'] ?? null,
        $resourceAttributes['tax_profile_id'] ?? null,
        $resourceAttributes['meta_data'] ?? null,
        $tiers,
        $tax_providers_fields,
        $resourceAttributes['show_description_in_invoices'] ?? null,
        $resourceAttributes['show_description_in_quotes'] ?? null,
        
        
        isset($resourceAttributes['pricing_model']) ? \Chargebee\Enums\PricingModel::tryFromValue($resourceAttributes['pricing_model']) : null,
        
        isset($resourceAttributes['avalara_sale_type']) ? \Chargebee\Enums\AvalaraSaleType::tryFromValue($resourceAttributes['avalara_sale_type']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Addon\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['charge_type']) ? \Chargebee\Resources\Addon\Enums\ChargeType::tryFromValue($resourceAttributes['charge_type']) : null,
        
        isset($resourceAttributes['period_unit']) ? \Chargebee\Resources\Addon\Enums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Addon\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['shipping_frequency_period_unit']) ? \Chargebee\Resources\Addon\Enums\ShippingFrequencyPeriodUnit::tryFromValue($resourceAttributes['shipping_frequency_period_unit']) : null,
        
        isset($resourceAttributes['proration_type']) ? \Chargebee\Resources\Addon\Enums\ProrationType::tryFromValue($resourceAttributes['proration_type']) : null,
        
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
        'unit' => $this->unit,
        'archived_at' => $this->archived_at,
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
        'price_in_decimal' => $this->price_in_decimal,
        'included_in_mrr' => $this->included_in_mrr,
        'invoice_notes' => $this->invoice_notes,
        'taxable' => $this->taxable,
        'tax_profile_id' => $this->tax_profile_id,
        'meta_data' => $this->meta_data,
        
        
        'show_description_in_invoices' => $this->show_description_in_invoices,
        'show_description_in_quotes' => $this->show_description_in_quotes,
        
        'pricing_model' => $this->pricing_model?->value,
        
        'avalara_sale_type' => $this->avalara_sale_type?->value,
        
        'channel' => $this->channel?->value,
        
        'type' => $this->type?->value,
        
        'charge_type' => $this->charge_type?->value,
        
        'period_unit' => $this->period_unit?->value,
        
        'status' => $this->status?->value,
        
        'shipping_frequency_period_unit' => $this->shipping_frequency_period_unit?->value,
        
        'proration_type' => $this->proration_type?->value,
        
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

        foreach($this->_data as $keys => $value){
            if (!in_array($keys, $this::$knownFields)) {
                $data[$keys] = $value;
            }
        } 
        return $data;
    }
}
?>