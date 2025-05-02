<?php

namespace Chargebee\Resources\Quote;

use Chargebee\ValueObjects\SupportsCustomFields;
class Quote  extends SupportsCustomFields  { 
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
    * @var ?string $po_number
    */
    public ?string $po_number;
    
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
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $vat_number
    */
    public ?string $vat_number;
    
    /**
    *
    * @var ?int $valid_till
    */
    public ?int $valid_till;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var ?int $total_payable
    */
    public ?int $total_payable;
    
    /**
    *
    * @var ?int $charge_on_acceptance
    */
    public ?int $charge_on_acceptance;
    
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
    * @var ?int $version
    */
    public ?int $version;
    
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
    * @var ?string $vat_number_prefix
    */
    public ?string $vat_number_prefix;
    
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
    * @var ?array<LineItemTier> $line_item_tiers
    */
    public ?array $line_item_tiers;
    
    /**
    *
    * @var ?string $tax_category
    */
    public ?string $tax_category;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var mixed $notes
    */
    public mixed $notes;
    
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
    * @var ?int $contract_term_start
    */
    public ?int $contract_term_start;
    
    /**
    *
    * @var ?int $contract_term_end
    */
    public ?int $contract_term_end;
    
    /**
    *
    * @var ?int $contract_term_termination_fee
    */
    public ?int $contract_term_termination_fee;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?\Chargebee\Enums\PriceType $price_type
    */
    public ?\Chargebee\Enums\PriceType $price_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Quote\Enums\Status $status
    */
    public ?\Chargebee\Resources\Quote\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Quote\Enums\OperationType $operation_type
    */
    public ?\Chargebee\Resources\Quote\Enums\OperationType $operation_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "po_number" , "customer_id" , "subscription_id" , "invoice_id" , "vat_number" , "valid_till" , "date" , "total_payable" , "charge_on_acceptance" , "sub_total" , "total" , "credits_applied" , "amount_paid" , "amount_due" , "version" , "resource_version" , "updated_at" , "vat_number_prefix" , "line_items" , "discounts" , "line_item_discounts" , "taxes" , "line_item_taxes" , "line_item_tiers" , "tax_category" , "currency_code" , "notes" , "shipping_address" , "billing_address" , "contract_term_start" , "contract_term_end" , "contract_term_termination_fee" , "business_entity_id" , "deleted"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $name,
        ?string $po_number,
        ?string $customer_id,
        ?string $subscription_id,
        ?string $invoice_id,
        ?string $vat_number,
        ?int $valid_till,
        ?int $date,
        ?int $total_payable,
        ?int $charge_on_acceptance,
        ?int $sub_total,
        ?int $total,
        ?int $credits_applied,
        ?int $amount_paid,
        ?int $amount_due,
        ?int $version,
        ?int $resource_version,
        ?int $updated_at,
        ?string $vat_number_prefix,
        ?array $line_items,
        ?array $discounts,
        ?array $line_item_discounts,
        ?array $taxes,
        ?array $line_item_taxes,
        ?array $line_item_tiers,
        ?string $tax_category,
        ?string $currency_code,
        mixed $notes,
        ?ShippingAddress $shipping_address,
        ?BillingAddress $billing_address,
        ?int $contract_term_start,
        ?int $contract_term_end,
        ?int $contract_term_termination_fee,
        ?string $business_entity_id,
        ?bool $deleted,
        ?\Chargebee\Enums\PriceType $price_type,
        ?\Chargebee\Resources\Quote\Enums\Status $status,
        ?\Chargebee\Resources\Quote\Enums\OperationType $operation_type,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->po_number = $po_number;
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->invoice_id = $invoice_id;
        $this->vat_number = $vat_number;
        $this->valid_till = $valid_till;
        $this->date = $date;
        $this->total_payable = $total_payable;
        $this->charge_on_acceptance = $charge_on_acceptance;
        $this->sub_total = $sub_total;
        $this->total = $total;
        $this->credits_applied = $credits_applied;
        $this->amount_paid = $amount_paid;
        $this->amount_due = $amount_due;
        $this->version = $version;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->vat_number_prefix = $vat_number_prefix;
        $this->line_items = $line_items;
        $this->discounts = $discounts;
        $this->line_item_discounts = $line_item_discounts;
        $this->taxes = $taxes;
        $this->line_item_taxes = $line_item_taxes;
        $this->line_item_tiers = $line_item_tiers;
        $this->tax_category = $tax_category;
        $this->currency_code = $currency_code;
        $this->notes = $notes;
        $this->shipping_address = $shipping_address;
        $this->billing_address = $billing_address;
        $this->contract_term_start = $contract_term_start;
        $this->contract_term_end = $contract_term_end;
        $this->contract_term_termination_fee = $contract_term_termination_fee;
        $this->business_entity_id = $business_entity_id;
        $this->deleted = $deleted; 
        $this->price_type = $price_type; 
        $this->status = $status;
        $this->operation_type = $operation_type;
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
        
        $line_item_tiers = array_map(fn (array $result): LineItemTier =>  LineItemTier::from(
            $result
        ), $resourceAttributes['line_item_tiers'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['po_number'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['vat_number'] ?? null,
        $resourceAttributes['valid_till'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['total_payable'] ?? null,
        $resourceAttributes['charge_on_acceptance'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['total'] ?? null,
        $resourceAttributes['credits_applied'] ?? null,
        $resourceAttributes['amount_paid'] ?? null,
        $resourceAttributes['amount_due'] ?? null,
        $resourceAttributes['version'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['vat_number_prefix'] ?? null,
        $line_items,
        $discounts,
        $line_item_discounts,
        $taxes,
        $line_item_taxes,
        $line_item_tiers,
        $resourceAttributes['tax_category'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['notes'] ?? null,
        isset($resourceAttributes['shipping_address']) ? ShippingAddress::from($resourceAttributes['shipping_address']) : null,
        isset($resourceAttributes['billing_address']) ? BillingAddress::from($resourceAttributes['billing_address']) : null,
        $resourceAttributes['contract_term_start'] ?? null,
        $resourceAttributes['contract_term_end'] ?? null,
        $resourceAttributes['contract_term_termination_fee'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        
        
        isset($resourceAttributes['price_type']) ? \Chargebee\Enums\PriceType::tryFromValue($resourceAttributes['price_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Quote\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['operation_type']) ? \Chargebee\Resources\Quote\Enums\OperationType::tryFromValue($resourceAttributes['operation_type']) : null,
        
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
        'po_number' => $this->po_number,
        'customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'invoice_id' => $this->invoice_id,
        'vat_number' => $this->vat_number,
        'valid_till' => $this->valid_till,
        'date' => $this->date,
        'total_payable' => $this->total_payable,
        'charge_on_acceptance' => $this->charge_on_acceptance,
        'sub_total' => $this->sub_total,
        'total' => $this->total,
        'credits_applied' => $this->credits_applied,
        'amount_paid' => $this->amount_paid,
        'amount_due' => $this->amount_due,
        'version' => $this->version,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'vat_number_prefix' => $this->vat_number_prefix,
        
        
        
        
        
        
        'tax_category' => $this->tax_category,
        'currency_code' => $this->currency_code,
        'notes' => $this->notes,
        
        
        'contract_term_start' => $this->contract_term_start,
        'contract_term_end' => $this->contract_term_end,
        'contract_term_termination_fee' => $this->contract_term_termination_fee,
        'business_entity_id' => $this->business_entity_id,
        'deleted' => $this->deleted,
        
        'price_type' => $this->price_type?->value,
        
        'status' => $this->status?->value,
        
        'operation_type' => $this->operation_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->shipping_address instanceof ShippingAddress){
            $data['shipping_address'] = $this->shipping_address->toArray();
        }
        if($this->billing_address instanceof BillingAddress){
            $data['billing_address'] = $this->billing_address->toArray();
        }
        
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
        if($this->line_item_tiers !== []){
            $data['line_item_tiers'] = array_map(
                fn (LineItemTier $line_item_tiers): array => $line_item_tiers->toArray(),
                $this->line_item_tiers
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