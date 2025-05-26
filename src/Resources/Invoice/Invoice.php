<?php

namespace Chargebee\Resources\Invoice;

class Invoice  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
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
    * @var ?bool $recurring
    */
    public ?bool $recurring;
    
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
    * @var ?int $due_date
    */
    public ?int $due_date;
    
    /**
    *
    * @var ?int $net_term_days
    */
    public ?int $net_term_days;
    
    /**
    *
    * @var ?float $exchange_rate
    */
    public ?float $exchange_rate;
    
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
    * @var ?int $amount_paid
    */
    public ?int $amount_paid;
    
    /**
    *
    * @var ?int $amount_adjusted
    */
    public ?int $amount_adjusted;
    
    /**
    *
    * @var ?int $write_off_amount
    */
    public ?int $write_off_amount;
    
    /**
    *
    * @var ?int $credits_applied
    */
    public ?int $credits_applied;
    
    /**
    *
    * @var ?int $amount_due
    */
    public ?int $amount_due;
    
    /**
    *
    * @var ?int $paid_at
    */
    public ?int $paid_at;
    
    /**
    *
    * @var ?int $next_retry_at
    */
    public ?int $next_retry_at;
    
    /**
    *
    * @var ?int $voided_at
    */
    public ?int $voided_at;
    
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
    * @var ?int $tax
    */
    public ?int $tax;
    
    /**
    *
    * @var ?float $local_currency_exchange_rate
    */
    public ?float $local_currency_exchange_rate;
    
    /**
    *
    * @var ?bool $first_invoice
    */
    public ?bool $first_invoice;
    
    /**
    *
    * @var ?int $new_sales_amount
    */
    public ?int $new_sales_amount;
    
    /**
    *
    * @var ?bool $has_advance_charges
    */
    public ?bool $has_advance_charges;
    
    /**
    *
    * @var ?bool $term_finalized
    */
    public ?bool $term_finalized;
    
    /**
    *
    * @var ?bool $is_gifted
    */
    public ?bool $is_gifted;
    
    /**
    *
    * @var ?int $generated_at
    */
    public ?int $generated_at;
    
    /**
    *
    * @var ?int $expected_payment_date
    */
    public ?int $expected_payment_date;
    
    /**
    *
    * @var ?int $amount_to_collect
    */
    public ?int $amount_to_collect;
    
    /**
    *
    * @var ?int $round_off_amount
    */
    public ?int $round_off_amount;
    
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
    * @var ?array<LineItemCredit> $line_item_credits
    */
    public ?array $line_item_credits;
    
    /**
    *
    * @var ?array<LineItemTier> $line_item_tiers
    */
    public ?array $line_item_tiers;
    
    /**
    *
    * @var ?array<LinkedPayment> $linked_payments
    */
    public ?array $linked_payments;
    
    /**
    *
    * @var ?array<DunningAttempt> $dunning_attempts
    */
    public ?array $dunning_attempts;
    
    /**
    *
    * @var ?array<AppliedCredit> $applied_credits
    */
    public ?array $applied_credits;
    
    /**
    *
    * @var ?array<AdjustmentCreditNote> $adjustment_credit_notes
    */
    public ?array $adjustment_credit_notes;
    
    /**
    *
    * @var ?array<IssuedCreditNote> $issued_credit_notes
    */
    public ?array $issued_credit_notes;
    
    /**
    *
    * @var ?array<LinkedOrder> $linked_orders
    */
    public ?array $linked_orders;
    
    /**
    *
    * @var ?array<Note> $notes
    */
    public ?array $notes;
    
    /**
    *
    * @var ?ShippingAddress $shipping_address
    */
    public ?ShippingAddress $shipping_address;
    
    /**
    *
    * @var ?StatementDescriptor $statement_descriptor
    */
    public ?StatementDescriptor $statement_descriptor;
    
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
    * @var ?string $payment_owner
    */
    public ?string $payment_owner;
    
    /**
    *
    * @var ?string $void_reason_code
    */
    public ?string $void_reason_code;
    
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
    * @var ?SiteDetailsAtCreation $site_details_at_creation
    */
    public ?SiteDetailsAtCreation $site_details_at_creation;
    
    /**
    *
    * @var ?TaxOrigin $tax_origin
    */
    public ?TaxOrigin $tax_origin;
    
    /**
    *
    * @var ?array<LineItemAddress> $line_item_addresses
    */
    public ?array $line_item_addresses;
    
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
    * @var ?\Chargebee\Resources\Invoice\Enums\Status $status
    */
    public ?\Chargebee\Resources\Invoice\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\Enums\DunningStatus $dunning_status
    */
    public ?\Chargebee\Resources\Invoice\Enums\DunningStatus $dunning_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "po_number" , "customer_id" , "subscription_id" , "recurring" , "vat_number" , "date" , "due_date" , "net_term_days" , "exchange_rate" , "currency_code" , "total" , "amount_paid" , "amount_adjusted" , "write_off_amount" , "credits_applied" , "amount_due" , "paid_at" , "next_retry_at" , "voided_at" , "resource_version" , "updated_at" , "sub_total" , "sub_total_in_local_currency" , "total_in_local_currency" , "local_currency_code" , "tax" , "local_currency_exchange_rate" , "first_invoice" , "new_sales_amount" , "has_advance_charges" , "term_finalized" , "is_gifted" , "generated_at" , "expected_payment_date" , "amount_to_collect" , "round_off_amount" , "line_items" , "discounts" , "line_item_discounts" , "taxes" , "line_item_taxes" , "line_item_credits" , "line_item_tiers" , "linked_payments" , "dunning_attempts" , "applied_credits" , "adjustment_credit_notes" , "issued_credit_notes" , "linked_orders" , "notes" , "shipping_address" , "statement_descriptor" , "billing_address" , "einvoice" , "payment_owner" , "void_reason_code" , "deleted" , "tax_category" , "vat_number_prefix" , "business_entity_id" , "site_details_at_creation" , "tax_origin" , "line_item_addresses"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $po_number,
        ?string $customer_id,
        ?string $subscription_id,
        ?bool $recurring,
        ?string $vat_number,
        ?int $date,
        ?int $due_date,
        ?int $net_term_days,
        ?float $exchange_rate,
        ?string $currency_code,
        ?int $total,
        ?int $amount_paid,
        ?int $amount_adjusted,
        ?int $write_off_amount,
        ?int $credits_applied,
        ?int $amount_due,
        ?int $paid_at,
        ?int $next_retry_at,
        ?int $voided_at,
        ?int $resource_version,
        ?int $updated_at,
        ?int $sub_total,
        ?int $sub_total_in_local_currency,
        ?int $total_in_local_currency,
        ?string $local_currency_code,
        ?int $tax,
        ?float $local_currency_exchange_rate,
        ?bool $first_invoice,
        ?int $new_sales_amount,
        ?bool $has_advance_charges,
        ?bool $term_finalized,
        ?bool $is_gifted,
        ?int $generated_at,
        ?int $expected_payment_date,
        ?int $amount_to_collect,
        ?int $round_off_amount,
        ?array $line_items,
        ?array $discounts,
        ?array $line_item_discounts,
        ?array $taxes,
        ?array $line_item_taxes,
        ?array $line_item_credits,
        ?array $line_item_tiers,
        ?array $linked_payments,
        ?array $dunning_attempts,
        ?array $applied_credits,
        ?array $adjustment_credit_notes,
        ?array $issued_credit_notes,
        ?array $linked_orders,
        ?array $notes,
        ?ShippingAddress $shipping_address,
        ?StatementDescriptor $statement_descriptor,
        ?BillingAddress $billing_address,
        ?Einvoice $einvoice,
        ?string $payment_owner,
        ?string $void_reason_code,
        ?bool $deleted,
        ?string $tax_category,
        ?string $vat_number_prefix,
        ?string $business_entity_id,
        ?SiteDetailsAtCreation $site_details_at_creation,
        ?TaxOrigin $tax_origin,
        ?array $line_item_addresses,
        ?\Chargebee\Enums\PriceType $price_type,
        ?\Chargebee\Enums\Channel $channel,
        ?\Chargebee\Resources\Invoice\Enums\Status $status,
        ?\Chargebee\Resources\Invoice\Enums\DunningStatus $dunning_status,
    )
    { 
        $this->id = $id;
        $this->po_number = $po_number;
        $this->customer_id = $customer_id;
        $this->subscription_id = $subscription_id;
        $this->recurring = $recurring;
        $this->vat_number = $vat_number;
        $this->date = $date;
        $this->due_date = $due_date;
        $this->net_term_days = $net_term_days;
        $this->exchange_rate = $exchange_rate;
        $this->currency_code = $currency_code;
        $this->total = $total;
        $this->amount_paid = $amount_paid;
        $this->amount_adjusted = $amount_adjusted;
        $this->write_off_amount = $write_off_amount;
        $this->credits_applied = $credits_applied;
        $this->amount_due = $amount_due;
        $this->paid_at = $paid_at;
        $this->next_retry_at = $next_retry_at;
        $this->voided_at = $voided_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->sub_total = $sub_total;
        $this->sub_total_in_local_currency = $sub_total_in_local_currency;
        $this->total_in_local_currency = $total_in_local_currency;
        $this->local_currency_code = $local_currency_code;
        $this->tax = $tax;
        $this->local_currency_exchange_rate = $local_currency_exchange_rate;
        $this->first_invoice = $first_invoice;
        $this->new_sales_amount = $new_sales_amount;
        $this->has_advance_charges = $has_advance_charges;
        $this->term_finalized = $term_finalized;
        $this->is_gifted = $is_gifted;
        $this->generated_at = $generated_at;
        $this->expected_payment_date = $expected_payment_date;
        $this->amount_to_collect = $amount_to_collect;
        $this->round_off_amount = $round_off_amount;
        $this->line_items = $line_items;
        $this->discounts = $discounts;
        $this->line_item_discounts = $line_item_discounts;
        $this->taxes = $taxes;
        $this->line_item_taxes = $line_item_taxes;
        $this->line_item_credits = $line_item_credits;
        $this->line_item_tiers = $line_item_tiers;
        $this->linked_payments = $linked_payments;
        $this->dunning_attempts = $dunning_attempts;
        $this->applied_credits = $applied_credits;
        $this->adjustment_credit_notes = $adjustment_credit_notes;
        $this->issued_credit_notes = $issued_credit_notes;
        $this->linked_orders = $linked_orders;
        $this->notes = $notes;
        $this->shipping_address = $shipping_address;
        $this->statement_descriptor = $statement_descriptor;
        $this->billing_address = $billing_address;
        $this->einvoice = $einvoice;
        $this->payment_owner = $payment_owner;
        $this->void_reason_code = $void_reason_code;
        $this->deleted = $deleted;
        $this->tax_category = $tax_category;
        $this->vat_number_prefix = $vat_number_prefix;
        $this->business_entity_id = $business_entity_id;
        $this->site_details_at_creation = $site_details_at_creation;
        $this->tax_origin = $tax_origin;
        $this->line_item_addresses = $line_item_addresses; 
        $this->price_type = $price_type;
        $this->channel = $channel; 
        $this->status = $status;
        $this->dunning_status = $dunning_status;
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
        
        $line_item_credits = array_map(fn (array $result): LineItemCredit =>  LineItemCredit::from(
            $result
        ), $resourceAttributes['line_item_credits'] ?? []);
        
        $line_item_tiers = array_map(fn (array $result): LineItemTier =>  LineItemTier::from(
            $result
        ), $resourceAttributes['line_item_tiers'] ?? []);
        
        $linked_payments = array_map(fn (array $result): LinkedPayment =>  LinkedPayment::from(
            $result
        ), $resourceAttributes['linked_payments'] ?? []);
        
        $dunning_attempts = array_map(fn (array $result): DunningAttempt =>  DunningAttempt::from(
            $result
        ), $resourceAttributes['dunning_attempts'] ?? []);
        
        $applied_credits = array_map(fn (array $result): AppliedCredit =>  AppliedCredit::from(
            $result
        ), $resourceAttributes['applied_credits'] ?? []);
        
        $adjustment_credit_notes = array_map(fn (array $result): AdjustmentCreditNote =>  AdjustmentCreditNote::from(
            $result
        ), $resourceAttributes['adjustment_credit_notes'] ?? []);
        
        $issued_credit_notes = array_map(fn (array $result): IssuedCreditNote =>  IssuedCreditNote::from(
            $result
        ), $resourceAttributes['issued_credit_notes'] ?? []);
        
        $linked_orders = array_map(fn (array $result): LinkedOrder =>  LinkedOrder::from(
            $result
        ), $resourceAttributes['linked_orders'] ?? []);
        
        $notes = array_map(fn (array $result): Note =>  Note::from(
            $result
        ), $resourceAttributes['notes'] ?? []);
        
        $line_item_addresses = array_map(fn (array $result): LineItemAddress =>  LineItemAddress::from(
            $result
        ), $resourceAttributes['line_item_addresses'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['po_number'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['recurring'] ?? null,
        $resourceAttributes['vat_number'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['due_date'] ?? null,
        $resourceAttributes['net_term_days'] ?? null,
        $resourceAttributes['exchange_rate'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['total'] ?? null,
        $resourceAttributes['amount_paid'] ?? null,
        $resourceAttributes['amount_adjusted'] ?? null,
        $resourceAttributes['write_off_amount'] ?? null,
        $resourceAttributes['credits_applied'] ?? null,
        $resourceAttributes['amount_due'] ?? null,
        $resourceAttributes['paid_at'] ?? null,
        $resourceAttributes['next_retry_at'] ?? null,
        $resourceAttributes['voided_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['sub_total_in_local_currency'] ?? null,
        $resourceAttributes['total_in_local_currency'] ?? null,
        $resourceAttributes['local_currency_code'] ?? null,
        $resourceAttributes['tax'] ?? null,
        $resourceAttributes['local_currency_exchange_rate'] ?? null,
        $resourceAttributes['first_invoice'] ?? null,
        $resourceAttributes['new_sales_amount'] ?? null,
        $resourceAttributes['has_advance_charges'] ?? null,
        $resourceAttributes['term_finalized'] ?? null,
        $resourceAttributes['is_gifted'] ?? null,
        $resourceAttributes['generated_at'] ?? null,
        $resourceAttributes['expected_payment_date'] ?? null,
        $resourceAttributes['amount_to_collect'] ?? null,
        $resourceAttributes['round_off_amount'] ?? null,
        $line_items,
        $discounts,
        $line_item_discounts,
        $taxes,
        $line_item_taxes,
        $line_item_credits,
        $line_item_tiers,
        $linked_payments,
        $dunning_attempts,
        $applied_credits,
        $adjustment_credit_notes,
        $issued_credit_notes,
        $linked_orders,
        $notes,
        isset($resourceAttributes['shipping_address']) ? ShippingAddress::from($resourceAttributes['shipping_address']) : null,
        isset($resourceAttributes['statement_descriptor']) ? StatementDescriptor::from($resourceAttributes['statement_descriptor']) : null,
        isset($resourceAttributes['billing_address']) ? BillingAddress::from($resourceAttributes['billing_address']) : null,
        isset($resourceAttributes['einvoice']) ? Einvoice::from($resourceAttributes['einvoice']) : null,
        $resourceAttributes['payment_owner'] ?? null,
        $resourceAttributes['void_reason_code'] ?? null,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['tax_category'] ?? null,
        $resourceAttributes['vat_number_prefix'] ?? null,
        $resourceAttributes['business_entity_id'] ?? null,
        isset($resourceAttributes['site_details_at_creation']) ? SiteDetailsAtCreation::from($resourceAttributes['site_details_at_creation']) : null,
        isset($resourceAttributes['tax_origin']) ? TaxOrigin::from($resourceAttributes['tax_origin']) : null,
        $line_item_addresses,
        
        
        isset($resourceAttributes['price_type']) ? \Chargebee\Enums\PriceType::tryFromValue($resourceAttributes['price_type']) : null,
        
        isset($resourceAttributes['channel']) ? \Chargebee\Enums\Channel::tryFromValue($resourceAttributes['channel']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Invoice\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['dunning_status']) ? \Chargebee\Resources\Invoice\Enums\DunningStatus::tryFromValue($resourceAttributes['dunning_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'po_number' => $this->po_number,
        'customer_id' => $this->customer_id,
        'subscription_id' => $this->subscription_id,
        'recurring' => $this->recurring,
        'vat_number' => $this->vat_number,
        'date' => $this->date,
        'due_date' => $this->due_date,
        'net_term_days' => $this->net_term_days,
        'exchange_rate' => $this->exchange_rate,
        'currency_code' => $this->currency_code,
        'total' => $this->total,
        'amount_paid' => $this->amount_paid,
        'amount_adjusted' => $this->amount_adjusted,
        'write_off_amount' => $this->write_off_amount,
        'credits_applied' => $this->credits_applied,
        'amount_due' => $this->amount_due,
        'paid_at' => $this->paid_at,
        'next_retry_at' => $this->next_retry_at,
        'voided_at' => $this->voided_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'sub_total' => $this->sub_total,
        'sub_total_in_local_currency' => $this->sub_total_in_local_currency,
        'total_in_local_currency' => $this->total_in_local_currency,
        'local_currency_code' => $this->local_currency_code,
        'tax' => $this->tax,
        'local_currency_exchange_rate' => $this->local_currency_exchange_rate,
        'first_invoice' => $this->first_invoice,
        'new_sales_amount' => $this->new_sales_amount,
        'has_advance_charges' => $this->has_advance_charges,
        'term_finalized' => $this->term_finalized,
        'is_gifted' => $this->is_gifted,
        'generated_at' => $this->generated_at,
        'expected_payment_date' => $this->expected_payment_date,
        'amount_to_collect' => $this->amount_to_collect,
        'round_off_amount' => $this->round_off_amount,
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        'payment_owner' => $this->payment_owner,
        'void_reason_code' => $this->void_reason_code,
        'deleted' => $this->deleted,
        'tax_category' => $this->tax_category,
        'vat_number_prefix' => $this->vat_number_prefix,
        'business_entity_id' => $this->business_entity_id,
        
        
        
        
        'price_type' => $this->price_type?->value,
        
        'channel' => $this->channel?->value,
        
        'status' => $this->status?->value,
        
        'dunning_status' => $this->dunning_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->shipping_address instanceof ShippingAddress){
            $data['shipping_address'] = $this->shipping_address->toArray();
        }
        if($this->statement_descriptor instanceof StatementDescriptor){
            $data['statement_descriptor'] = $this->statement_descriptor->toArray();
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
        if($this->tax_origin instanceof TaxOrigin){
            $data['tax_origin'] = $this->tax_origin->toArray();
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
        if($this->line_item_credits !== []){
            $data['line_item_credits'] = array_map(
                fn (LineItemCredit $line_item_credits): array => $line_item_credits->toArray(),
                $this->line_item_credits
            );
        }
        if($this->line_item_tiers !== []){
            $data['line_item_tiers'] = array_map(
                fn (LineItemTier $line_item_tiers): array => $line_item_tiers->toArray(),
                $this->line_item_tiers
            );
        }
        if($this->linked_payments !== []){
            $data['linked_payments'] = array_map(
                fn (LinkedPayment $linked_payments): array => $linked_payments->toArray(),
                $this->linked_payments
            );
        }
        if($this->dunning_attempts !== []){
            $data['dunning_attempts'] = array_map(
                fn (DunningAttempt $dunning_attempts): array => $dunning_attempts->toArray(),
                $this->dunning_attempts
            );
        }
        if($this->applied_credits !== []){
            $data['applied_credits'] = array_map(
                fn (AppliedCredit $applied_credits): array => $applied_credits->toArray(),
                $this->applied_credits
            );
        }
        if($this->adjustment_credit_notes !== []){
            $data['adjustment_credit_notes'] = array_map(
                fn (AdjustmentCreditNote $adjustment_credit_notes): array => $adjustment_credit_notes->toArray(),
                $this->adjustment_credit_notes
            );
        }
        if($this->issued_credit_notes !== []){
            $data['issued_credit_notes'] = array_map(
                fn (IssuedCreditNote $issued_credit_notes): array => $issued_credit_notes->toArray(),
                $this->issued_credit_notes
            );
        }
        if($this->linked_orders !== []){
            $data['linked_orders'] = array_map(
                fn (LinkedOrder $linked_orders): array => $linked_orders->toArray(),
                $this->linked_orders
            );
        }
        if($this->notes !== []){
            $data['notes'] = array_map(
                fn (Note $notes): array => $notes->toArray(),
                $this->notes
            );
        }
        if($this->line_item_addresses !== []){
            $data['line_item_addresses'] = array_map(
                fn (LineItemAddress $line_item_addresses): array => $line_item_addresses->toArray(),
                $this->line_item_addresses
            );
        }

        
        return $data;
    }
}
?>