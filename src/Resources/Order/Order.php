<?php

namespace Chargebee\Resources\Order;

class Order  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $document_number
    */
    public ?string $document_number;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $reference_id
    */
    public ?string $reference_id;
    
    /**
    *
    * @var ?string $fulfillment_status
    */
    public ?string $fulfillment_status;
    
    /**
    *
    * @var ?int $order_date
    */
    public ?int $order_date;
    
    /**
    *
    * @var ?int $shipping_date
    */
    public ?int $shipping_date;
    
    /**
    *
    * @var ?string $note
    */
    public ?string $note;
    
    /**
    *
    * @var ?string $tracking_id
    */
    public ?string $tracking_id;
    
    /**
    *
    * @var ?string $tracking_url
    */
    public ?string $tracking_url;
    
    /**
    *
    * @var ?string $batch_id
    */
    public ?string $batch_id;
    
    /**
    *
    * @var ?string $created_by
    */
    public ?string $created_by;
    
    /**
    *
    * @var ?string $shipment_carrier
    */
    public ?string $shipment_carrier;
    
    /**
    *
    * @var ?int $invoice_round_off_amount
    */
    public ?int $invoice_round_off_amount;
    
    /**
    *
    * @var ?int $tax
    */
    public ?int $tax;
    
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
    * @var ?int $refundable_credits_issued
    */
    public ?int $refundable_credits_issued;
    
    /**
    *
    * @var ?int $refundable_credits
    */
    public ?int $refundable_credits;
    
    /**
    *
    * @var ?int $rounding_adjustement
    */
    public ?int $rounding_adjustement;
    
    /**
    *
    * @var ?int $paid_on
    */
    public ?int $paid_on;
    
    /**
    *
    * @var ?int $shipping_cut_off_date
    */
    public ?int $shipping_cut_off_date;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $status_update_at
    */
    public ?int $status_update_at;
    
    /**
    *
    * @var ?int $delivered_at
    */
    public ?int $delivered_at;
    
    /**
    *
    * @var ?int $shipped_at
    */
    public ?int $shipped_at;
    
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
    * @var ?int $cancelled_at
    */
    public ?int $cancelled_at;
    
    /**
    *
    * @var ?bool $is_resent
    */
    public ?bool $is_resent;
    
    /**
    *
    * @var ?string $original_order_id
    */
    public ?string $original_order_id;
    
    /**
    *
    * @var ?array<OrderLineItem> $order_line_items
    */
    public ?array $order_line_items;
    
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
    * @var ?int $discount
    */
    public ?int $discount;
    
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
    * @var ?array<LineItemTax> $line_item_taxes
    */
    public ?array $line_item_taxes;
    
    /**
    *
    * @var ?array<LineItemDiscount> $line_item_discounts
    */
    public ?array $line_item_discounts;
    
    /**
    *
    * @var ?array<LinkedCreditNote> $linked_credit_notes
    */
    public ?array $linked_credit_notes;
    
    /**
    *
    * @var ?bool $deleted
    */
    public ?bool $deleted;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?bool $is_gifted
    */
    public ?bool $is_gifted;
    
    /**
    *
    * @var ?string $gift_note
    */
    public ?string $gift_note;
    
    /**
    *
    * @var ?string $gift_id
    */
    public ?string $gift_id;
    
    /**
    *
    * @var ?string $resend_reason
    */
    public ?string $resend_reason;
    
    /**
    *
    * @var ?array<ResentOrder> $resent_orders
    */
    public ?array $resent_orders;
    
    /**
    *
    * @var ?string $business_entity_id
    */
    public ?string $business_entity_id;
    
    /**
    *
    * @var ?\Chargebee\Enums\PriceType $price_type
    */
    public ?\Chargebee\Enums\PriceType $price_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\Enums\Status $status
    */
    public ?\Chargebee\Resources\Order\Enums\Status $status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\Enums\CancellationReason $cancellation_reason
    */
    public ?\Chargebee\Resources\Order\Enums\CancellationReason $cancellation_reason;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\Enums\PaymentStatus $payment_status
    */
    public ?\Chargebee\Resources\Order\Enums\PaymentStatus $payment_status;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\Enums\OrderType $order_type
    */
    public ?\Chargebee\Resources\Order\Enums\OrderType $order_type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\Enums\ResentStatus $resent_status
    */
    public ?\Chargebee\Resources\Order\Enums\ResentStatus $resent_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "document_number" , "invoice_id" , "subscription_id" , "customer_id" , "reference_id" , "fulfillment_status" , "order_date" , "shipping_date" , "note" , "tracking_id" , "tracking_url" , "batch_id" , "created_by" , "shipment_carrier" , "invoice_round_off_amount" , "tax" , "amount_paid" , "amount_adjusted" , "refundable_credits_issued" , "refundable_credits" , "rounding_adjustement" , "paid_on" , "shipping_cut_off_date" , "created_at" , "status_update_at" , "delivered_at" , "shipped_at" , "resource_version" , "updated_at" , "cancelled_at" , "is_resent" , "original_order_id" , "order_line_items" , "shipping_address" , "billing_address" , "discount" , "sub_total" , "total" , "line_item_taxes" , "line_item_discounts" , "linked_credit_notes" , "deleted" , "currency_code" , "is_gifted" , "gift_note" , "gift_id" , "resend_reason" , "resent_orders" , "business_entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $document_number,
        ?string $invoice_id,
        ?string $subscription_id,
        ?string $customer_id,
        ?string $reference_id,
        ?string $fulfillment_status,
        ?int $order_date,
        ?int $shipping_date,
        ?string $note,
        ?string $tracking_id,
        ?string $tracking_url,
        ?string $batch_id,
        ?string $created_by,
        ?string $shipment_carrier,
        ?int $invoice_round_off_amount,
        ?int $tax,
        ?int $amount_paid,
        ?int $amount_adjusted,
        ?int $refundable_credits_issued,
        ?int $refundable_credits,
        ?int $rounding_adjustement,
        ?int $paid_on,
        ?int $shipping_cut_off_date,
        ?int $created_at,
        ?int $status_update_at,
        ?int $delivered_at,
        ?int $shipped_at,
        ?int $resource_version,
        ?int $updated_at,
        ?int $cancelled_at,
        ?bool $is_resent,
        ?string $original_order_id,
        ?array $order_line_items,
        ?ShippingAddress $shipping_address,
        ?BillingAddress $billing_address,
        ?int $discount,
        ?int $sub_total,
        ?int $total,
        ?array $line_item_taxes,
        ?array $line_item_discounts,
        ?array $linked_credit_notes,
        ?bool $deleted,
        ?string $currency_code,
        ?bool $is_gifted,
        ?string $gift_note,
        ?string $gift_id,
        ?string $resend_reason,
        ?array $resent_orders,
        ?string $business_entity_id,
        ?\Chargebee\Enums\PriceType $price_type,
        ?\Chargebee\Resources\Order\Enums\Status $status,
        ?\Chargebee\Resources\Order\Enums\CancellationReason $cancellation_reason,
        ?\Chargebee\Resources\Order\Enums\PaymentStatus $payment_status,
        ?\Chargebee\Resources\Order\Enums\OrderType $order_type,
        ?\Chargebee\Resources\Order\Enums\ResentStatus $resent_status,
    )
    { 
        $this->id = $id;
        $this->document_number = $document_number;
        $this->invoice_id = $invoice_id;
        $this->subscription_id = $subscription_id;
        $this->customer_id = $customer_id;
        $this->reference_id = $reference_id;
        $this->fulfillment_status = $fulfillment_status;
        $this->order_date = $order_date;
        $this->shipping_date = $shipping_date;
        $this->note = $note;
        $this->tracking_id = $tracking_id;
        $this->tracking_url = $tracking_url;
        $this->batch_id = $batch_id;
        $this->created_by = $created_by;
        $this->shipment_carrier = $shipment_carrier;
        $this->invoice_round_off_amount = $invoice_round_off_amount;
        $this->tax = $tax;
        $this->amount_paid = $amount_paid;
        $this->amount_adjusted = $amount_adjusted;
        $this->refundable_credits_issued = $refundable_credits_issued;
        $this->refundable_credits = $refundable_credits;
        $this->rounding_adjustement = $rounding_adjustement;
        $this->paid_on = $paid_on;
        $this->shipping_cut_off_date = $shipping_cut_off_date;
        $this->created_at = $created_at;
        $this->status_update_at = $status_update_at;
        $this->delivered_at = $delivered_at;
        $this->shipped_at = $shipped_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->cancelled_at = $cancelled_at;
        $this->is_resent = $is_resent;
        $this->original_order_id = $original_order_id;
        $this->order_line_items = $order_line_items;
        $this->shipping_address = $shipping_address;
        $this->billing_address = $billing_address;
        $this->discount = $discount;
        $this->sub_total = $sub_total;
        $this->total = $total;
        $this->line_item_taxes = $line_item_taxes;
        $this->line_item_discounts = $line_item_discounts;
        $this->linked_credit_notes = $linked_credit_notes;
        $this->deleted = $deleted;
        $this->currency_code = $currency_code;
        $this->is_gifted = $is_gifted;
        $this->gift_note = $gift_note;
        $this->gift_id = $gift_id;
        $this->resend_reason = $resend_reason;
        $this->resent_orders = $resent_orders;
        $this->business_entity_id = $business_entity_id; 
        $this->price_type = $price_type; 
        $this->status = $status;
        $this->cancellation_reason = $cancellation_reason;
        $this->payment_status = $payment_status;
        $this->order_type = $order_type;
        $this->resent_status = $resent_status; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $order_line_items = array_map(fn (array $result): OrderLineItem =>  OrderLineItem::from(
            $result
        ), $resourceAttributes['order_line_items'] ?? []);
        
        $line_item_taxes = array_map(fn (array $result): LineItemTax =>  LineItemTax::from(
            $result
        ), $resourceAttributes['line_item_taxes'] ?? []);
        
        $line_item_discounts = array_map(fn (array $result): LineItemDiscount =>  LineItemDiscount::from(
            $result
        ), $resourceAttributes['line_item_discounts'] ?? []);
        
        $linked_credit_notes = array_map(fn (array $result): LinkedCreditNote =>  LinkedCreditNote::from(
            $result
        ), $resourceAttributes['linked_credit_notes'] ?? []);
        
        $resent_orders = array_map(fn (array $result): ResentOrder =>  ResentOrder::from(
            $result
        ), $resourceAttributes['resent_orders'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['document_number'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['reference_id'] ?? null,
        $resourceAttributes['fulfillment_status'] ?? null,
        $resourceAttributes['order_date'] ?? null,
        $resourceAttributes['shipping_date'] ?? null,
        $resourceAttributes['note'] ?? null,
        $resourceAttributes['tracking_id'] ?? null,
        $resourceAttributes['tracking_url'] ?? null,
        $resourceAttributes['batch_id'] ?? null,
        $resourceAttributes['created_by'] ?? null,
        $resourceAttributes['shipment_carrier'] ?? null,
        $resourceAttributes['invoice_round_off_amount'] ?? null,
        $resourceAttributes['tax'] ?? null,
        $resourceAttributes['amount_paid'] ?? null,
        $resourceAttributes['amount_adjusted'] ?? null,
        $resourceAttributes['refundable_credits_issued'] ?? null,
        $resourceAttributes['refundable_credits'] ?? null,
        $resourceAttributes['rounding_adjustement'] ?? null,
        $resourceAttributes['paid_on'] ?? null,
        $resourceAttributes['shipping_cut_off_date'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['status_update_at'] ?? null,
        $resourceAttributes['delivered_at'] ?? null,
        $resourceAttributes['shipped_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['cancelled_at'] ?? null,
        $resourceAttributes['is_resent'] ?? null,
        $resourceAttributes['original_order_id'] ?? null,
        $order_line_items,
        isset($resourceAttributes['shipping_address']) ? ShippingAddress::from($resourceAttributes['shipping_address']) : null,
        isset($resourceAttributes['billing_address']) ? BillingAddress::from($resourceAttributes['billing_address']) : null,
        $resourceAttributes['discount'] ?? null,
        $resourceAttributes['sub_total'] ?? null,
        $resourceAttributes['total'] ?? null,
        $line_item_taxes,
        $line_item_discounts,
        $linked_credit_notes,
        $resourceAttributes['deleted'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $resourceAttributes['is_gifted'] ?? null,
        $resourceAttributes['gift_note'] ?? null,
        $resourceAttributes['gift_id'] ?? null,
        $resourceAttributes['resend_reason'] ?? null,
        $resent_orders,
        $resourceAttributes['business_entity_id'] ?? null,
        
        
        isset($resourceAttributes['price_type']) ? \Chargebee\Enums\PriceType::tryFromValue($resourceAttributes['price_type']) : null,
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Order\Enums\Status::tryFromValue($resourceAttributes['status']) : null,
        
        isset($resourceAttributes['cancellation_reason']) ? \Chargebee\Resources\Order\Enums\CancellationReason::tryFromValue($resourceAttributes['cancellation_reason']) : null,
        
        isset($resourceAttributes['payment_status']) ? \Chargebee\Resources\Order\Enums\PaymentStatus::tryFromValue($resourceAttributes['payment_status']) : null,
        
        isset($resourceAttributes['order_type']) ? \Chargebee\Resources\Order\Enums\OrderType::tryFromValue($resourceAttributes['order_type']) : null,
        
        isset($resourceAttributes['resent_status']) ? \Chargebee\Resources\Order\Enums\ResentStatus::tryFromValue($resourceAttributes['resent_status']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'document_number' => $this->document_number,
        'invoice_id' => $this->invoice_id,
        'subscription_id' => $this->subscription_id,
        'customer_id' => $this->customer_id,
        'reference_id' => $this->reference_id,
        'fulfillment_status' => $this->fulfillment_status,
        'order_date' => $this->order_date,
        'shipping_date' => $this->shipping_date,
        'note' => $this->note,
        'tracking_id' => $this->tracking_id,
        'tracking_url' => $this->tracking_url,
        'batch_id' => $this->batch_id,
        'created_by' => $this->created_by,
        'shipment_carrier' => $this->shipment_carrier,
        'invoice_round_off_amount' => $this->invoice_round_off_amount,
        'tax' => $this->tax,
        'amount_paid' => $this->amount_paid,
        'amount_adjusted' => $this->amount_adjusted,
        'refundable_credits_issued' => $this->refundable_credits_issued,
        'refundable_credits' => $this->refundable_credits,
        'rounding_adjustement' => $this->rounding_adjustement,
        'paid_on' => $this->paid_on,
        'shipping_cut_off_date' => $this->shipping_cut_off_date,
        'created_at' => $this->created_at,
        'status_update_at' => $this->status_update_at,
        'delivered_at' => $this->delivered_at,
        'shipped_at' => $this->shipped_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'cancelled_at' => $this->cancelled_at,
        'is_resent' => $this->is_resent,
        'original_order_id' => $this->original_order_id,
        
        
        
        'discount' => $this->discount,
        'sub_total' => $this->sub_total,
        'total' => $this->total,
        
        
        
        'deleted' => $this->deleted,
        'currency_code' => $this->currency_code,
        'is_gifted' => $this->is_gifted,
        'gift_note' => $this->gift_note,
        'gift_id' => $this->gift_id,
        'resend_reason' => $this->resend_reason,
        
        'business_entity_id' => $this->business_entity_id,
        
        'price_type' => $this->price_type?->value,
        
        'status' => $this->status?->value,
        
        'cancellation_reason' => $this->cancellation_reason?->value,
        
        'payment_status' => $this->payment_status?->value,
        
        'order_type' => $this->order_type?->value,
        
        'resent_status' => $this->resent_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->shipping_address instanceof ShippingAddress){
            $data['shipping_address'] = $this->shipping_address->toArray();
        }
        if($this->billing_address instanceof BillingAddress){
            $data['billing_address'] = $this->billing_address->toArray();
        }
        
        if($this->order_line_items !== []){
            $data['order_line_items'] = array_map(
                fn (OrderLineItem $order_line_items): array => $order_line_items->toArray(),
                $this->order_line_items
            );
        }
        if($this->line_item_taxes !== []){
            $data['line_item_taxes'] = array_map(
                fn (LineItemTax $line_item_taxes): array => $line_item_taxes->toArray(),
                $this->line_item_taxes
            );
        }
        if($this->line_item_discounts !== []){
            $data['line_item_discounts'] = array_map(
                fn (LineItemDiscount $line_item_discounts): array => $line_item_discounts->toArray(),
                $this->line_item_discounts
            );
        }
        if($this->linked_credit_notes !== []){
            $data['linked_credit_notes'] = array_map(
                fn (LinkedCreditNote $linked_credit_notes): array => $linked_credit_notes->toArray(),
                $this->linked_credit_notes
            );
        }
        if($this->resent_orders !== []){
            $data['resent_orders'] = array_map(
                fn (ResentOrder $resent_orders): array => $resent_orders->toArray(),
                $this->resent_orders
            );
        }

        
        return $data;
    }
}
?>