<?php

namespace Chargebee\Resources\CreditNote;

class CreditNote  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $reference_invoice_id
    */
    public ?string $reference_invoice_id;
    
    /**
    *
    * @var ?string $vat_number
    */
    public ?string $vat_number;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?int $total
    */
    public ?int $total;
    
    /**
    *
    * @var ?int $amount_allocated
    */
    public ?int $amount_allocated;
    
    /**
    *
    * @var ?int $amount_refunded
    */
    public ?int $amount_refunded;
    
    /**
    *
    * @var ?int $amount_available
    */
    public ?int $amount_available;
    
    /**
    *
    * @var ?int $refunded_at
    */
    public ?int $refunded_at;
    
    /**
    *
    * @var ?int $voided_at
    */
    public ?int $voided_at;
    
    /**
    *
    * @var ?int $generated_at
    */
    public ?int $generated_at;
    
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
    * @var ?int $sub_total
    */
    public ?int $sub_total;
    
    /**
    *
    * @var ?int $sub_total_in_local_currency
    */
    public ?int $sub_total_in_local_currency;
    
    /**
    *
    * @var ?int $total_in_local_currency
    */
    public ?int $total_in_local_currency;
    
    /**
    *
    * @var ?string $local_currency_code
    */
    public ?string $local_currency_code;
    
    /**
    *
    * @var ?int $round_off_amount
    */
    public ?int $round_off_amount;
    
    /**
    *
    * @var ?int $fractional_correction
    */
    public ?int $fractional_correction;
    
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
    * @var ?TaxOrigin $tax_origin
    */
    public ?TaxOrigin $tax_origin;
    
    /**
    *
    * @var ?array<LinkedRefund> $linked_refunds
    */
    public ?array $linked_refunds;
    
    /**
    *
    * @var ?array<Allocation> $allocations
    */
    public ?array $allocations;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?string $tax_category
    */
    public ?string $tax_category;
    
    /**
    *
    * @var ?float $local_currency_exchange_rate
    */
    public ?float $local_currency_exchange_rate;
    
    /**
    *
    * @var ?string $create_reason_code
    */
    public ?string $create_reason_code;
    
    /**
    *
    * @var ?string $vat_number_prefix
    */
    public ?string $vat_number_prefix;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?ShippingAddress $shipping_address
    */
    public ?ShippingAddress $shipping_address;
    
    /**
    *
    * @var ?BillingAddress $billing_address
    */
    public ?BillingAddress $billing_address;
    
    /**
    *
    * @var ?Einvoice $einvoice
    */
    public ?Einvoice $einvoice;
    
    /**
    *
    * @var ?SiteDetailsAtCreation $site_details_at_creation
    */
    public ?SiteDetailsAtCreation $site_details_at_creation;
    
    /**
    *
    * @var ?\Chargebee\Enums\PriceType $price_type
    */
    public ?\Chargebee\Enums\PriceType $price_type;
    
    /**
    *
    * @var ?\Chargebee\Enums\Channel $channel
    */
    public ?\Chargebee\Enums\Channel $channel;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNote\Enums\Type $type
    */
    public ?\Chargebee\Resources\CreditNote\Enums\Type $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNote\Enums\ReasonCode $reason_code
    */
    public ?\Chargebee\Resources\CreditNote\Enums\ReasonCode $reason_code;
    
    /**
    *
    * @var ?\Chargebee\Resources\CreditNote\Enums\Status $status
    */
    public ?\Chargebee\Resources\CreditNote\Enums\Status $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "subscription_id" , "reference_invoice_id" , "vat_number" , "date" , "currency_code" , "total" , "amount_allocated" , "amount_refunded" , "amount_available" , "refunded_at" , "voided_at" , "generated_at" , "resource_version" , "updated_at" , "sub_total" , "sub_total_in_local_currency" , "total_in_local_currency" , "local_currency_code" , "round_off_amount" , "fractional_correction" , "line_items" , "line_item_tiers" , "line_item_discounts" , "line_item_taxes" , "line_item_addresses" , "discounts" , "taxes" , "tax_origin" , "linked_refunds" , "allocations" , "deleted" , "tax_category" , "local_currency_exchange_rate" , "create_reason_code" , "vat_number_prefix" , "business_entity_id" , "shipping_address" , "billing_address" , "einvoice" , "site_details_at_creation"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?string $subscription_id,
        ?string $reference_invoice_id,
        ?string $vat_number,
        ?int $date,
        ?string $currency_code,
        ?int $total,
        ?int $amount_allocated,
        ?int $amount_refunded,
        ?int $amount_available,
        ?int $refunded_at,
        ?int $voided_at,
        ?int $generated_at,
        ?int $resource_version,
        ?int $updated_at,
        ?int $sub_total,
        ?int $sub_total_in_local_currency,
        ?int $total_in_local_currency,
        ?string $local_currency_code,
        ?int $round_off_amount,
        ?int $fractional_correction,
        ?array $line_items,
        ?array $line_item_tiers,
        ?array $line_item_discounts,
        ?array $line_item_taxes,
        ?array $line_item_addresses,
        ?array $discounts,
        ?array $taxes,
        ?TaxOrigin $tax_origin,
        ?array $linked_refunds,
        ?array $allocations,
        ?bool $deleted,
        ?string $tax_category,
        ?float $local_currency_exchange_rate,
        ?string $create_reason_code,
        ?string $vat_number_prefix,
        ?string $business_entity_id,
        ?ShippingAddress $shipping_address,
        ?BillingAddress $billing_address,
        ?Einvoice $einvoice,
        ?SiteDetailsAtCreation $site_details_at_creation,
        ?\Chargebee\Enums\PriceType $price_type,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Resources\CreditNote\Enums\Type $type,
        ?\Chargebee\Resources\CreditNote\Enums\ReasonCode $reason_code,
        ?\Chargebee\Resources\CreditNote\Enums\Status $status,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->reference_invoice_id = $reference_invoice_id;
        $this->vat_number = $vat_number;
        $this->date = $date;
        $this->currency_code = $currency_code;
        $this->total = $total;
        $this->amount_allocated = $amount_allocated;
        $this->amount_refunded = $amount_refunded;
        $this->amount_available = $amount_available;
        $this->refunded_at = $refunded_at;
        $this->voided_at = $voided_at;
        $this->generated_at = $generated_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->sub_total = $sub_total;
        $this->sub_total_in_local_currency = $sub_total_in_local_currency;
        $this->total_in_local_currency = $total_in_local_currency;
        $this->local_currency_code = $local_currency_code;
        $this->round_off_amount = $round_off_amount;
        $this->fractional_correction = $fractional_correction;
        $this->line_items = $line_items;
        $this->line_item_tiers = $line_item_tiers;
        $this->line_item_discounts = $line_item_discounts;
        $this->line_item_taxes = $line_item_taxes;
        $this->line_item_addresses = $line_item_addresses;
        $this->discounts = $discounts;
        $this->taxes = $taxes;
        $this->tax_origin = $tax_origin;
        $this->linked_refunds = $linked_refunds;
        $this->allocations = $allocations;
        $this->deleted = $deleted;
        $this->tax_category = $tax_category;
        $this->local_currency_exchange_rate = $local_currency_exchange_rate;
        $this->create_reason_code = $create_reason_code;
        $this->vat_number_prefix = $vat_number_prefix;
        $this->business_entity_id = $business_entity_id;
        $this->shipping_address = $shipping_address;
        $this->billing_address = $billing_address;
        $this->einvoice = $einvoice;
        $this->site_details_at_creation = $site_details_at_creation; 
        $this->price_type = $price_type;
        $this->channel = $channel; 
        $this->type = $type;
        $this->reason_code = $reason_code;
        $this->status = $status; 
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
        
        $line_item_addresses = array_map(fn (array $result): LineItemAddress =>  LineItemAddress::from(
            $result
        ), $resourceAttributes['line_item_addresses'] ?? []);
        
        $discounts = array_map(fn (array $result): Discount =>  Discount::from(
            $result
        ), $resourceAttributes['discounts'] ?? []);
        
        $taxes = array_map(fn (array $result): Tax =>  Tax::from(
            $result
        ), $resourceAttributes['taxes'] ?? []);
        
        $linked_refunds = array_map(fn (array $result): LinkedRefund =>  LinkedRefund::from(
            $result
        ), $resourceAttributes['linked_refunds'] ?? []);
        
        $allocations = array_map(fn (array $result): Allocation =>  Allocation::from(
            $result
        ), $resourceAttributes['allocations'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['reference_invoice_id'] ?? null,
        $resourceAttributes['vat_number'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['total'] ?? null,
        $resourceAttributes['amount_allocated'] ?? null,
        $resourceAttributes['amount_refunded'] ?? null,
        $resourceAttributes['amount_available'] ?? null,
        $resourceAttributes['refunded_at'] ?? null,
        $resourceAttributes['voided_at'] ?? null,
        $resourceAttributes['generated_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['sub_total_in_local_currency'] ?? null,
        $resourceAttributes['total_in_local_currency'] ?? null,
        $resourceAttributes['local_currency_code'] ?? null,
        $resourceAttributes['round_off_amount'] ?? null,
        $resourceAttributes['fractional_correction'] ?? null,
        $line_items,
        $line_item_tiers,
        $line_item_discounts,
        $line_item_taxes,
        $line_item_addresses,
        $discounts,
        $taxes,
        isset($resourceAttributes['tax_origin']) ? TaxOrigin::from($resourceAttributes['tax_origin']) : null,
        $linked_refunds,
        $allocations,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['tax_category'] ?? null,
        $resourceAttributes['local_currency_exchange_rate'] ?? null,
        $resourceAttributes['create_reason_code'] ?? null,
        $resourceAttributes['vat_number_prefix'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        isset($resourceAttributes['shipping_address']) ? ShippingAddress::from($resourceAttributes['shipping_address']) : null,
        isset($resourceAttributes['billing_address']) ? BillingAddress::from($resourceAttributes['billing_address']) : null,
        isset($resourceAttributes['einvoice']) ? Einvoice::from($resourceAttributes['einvoice']) : null,
        isset($resourceAttributes['site_details_at_creation']) ? SiteDetailsAtCreation::from($resourceAttributes['site_details_at_creation']) : null,
        
        
        isset($resourceAttributes['price_type']) ? \Chargebee\Enums\PriceType::tryFromValue($resourceAttributes['price_type']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\CreditNote\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['reason_code']) ? \Chargebee\Resources\CreditNote\Enums\ReasonCode::tryFromValue($resourceAttributes['reason_code']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\CreditNote\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'reference_invoice_id' => $this->reference_invoice_id,
        'vat_number' => $this->vat_number,
        'date' => $this->date,
        'currency_code' => $this->currency_code,
        'total' => $this->total,
        'amount_allocated' => $this->amount_allocated,
        'amount_refunded' => $this->amount_refunded,
        'amount_available' => $this->amount_available,
        'refunded_at' => $this->refunded_at,
        'voided_at' => $this->voided_at,
        'generated_at' => $this->generated_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'sub_total' => $this->sub_total,
        'sub_total_in_local_currency' => $this->sub_total_in_local_currency,
        'total_in_local_currency' => $this->total_in_local_currency,
        'local_currency_code' => $this->local_currency_code,
        'round_off_amount' => $this->round_off_amount,
        'fractional_correction' => $this->fractional_correction,
        
        
        
        
        
        
        
        
        
        
        'deleted' => $this->deleted,
        'tax_category' => $this->tax_category,
        'local_currency_exchange_rate' => $this->local_currency_exchange_rate,
        'create_reason_code' => $this->create_reason_code,
        'vat_number_prefix' => $this->vat_number_prefix,
        'business_entity_id' => $this->business_entity_id,
        
        
        
        
        
        'price_type' => $this->price_type?->value,
        
        'channel' => $this->channel?->value,
        
        'type' => $this->type?->value,
        
        'reason_code' => $this->reason_code?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->tax_origin instanceof TaxOrigin){
            $data['tax_origin'] = $this->tax_origin->toArray();
        }
        if($this->shipping_address instanceof ShippingAddress){
            $data['shipping_address'] = $this->shipping_address->toArray();
        }
        if($this->billing_address instanceof BillingAddress){
            $data['billing_address'] = $this->billing_address->toArray();
        }
        if($this->einvoice instanceof Einvoice){
            $data['einvoice'] = $this->einvoice->toArray();
        }
        if($this->site_details_at_creation instanceof SiteDetailsAtCreation){
            $data['site_details_at_creation'] = $this->site_details_at_creation->toArray();
        }
        
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
        if($this->linked_refunds !== []){
            $data['linked_refunds'] = array_map(
                fn (LinkedRefund $linked_refunds): array => $linked_refunds->toArray(),
                $this->linked_refunds
            );
        }
        if($this->allocations !== []){
            $data['allocations'] = array_map(
                fn (Allocation $allocations): array => $allocations->toArray(),
                $this->allocations
            );
        }

        
        return $data;
    }
}
?>