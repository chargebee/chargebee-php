<?php

namespace Chargebee\Resources\Order;

class OrderLineItem  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $invoice_line_item_id
    */
    public ?string $invoice_line_item_id;
    
    /**
    *
    * @var ?int $unit_price
    */
    public ?int $unit_price;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?int $fulfillment_quantity
    */
    public ?int $fulfillment_quantity;
    
    /**
    *
    * @var ?int $fulfillment_amount
    */
    public ?int $fulfillment_amount;
    
    /**
    *
    * @var ?int $tax_amount
    */
    public ?int $tax_amount;
    
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
    * @var ?bool $is_shippable
    */
    public ?bool $is_shippable;
    
    /**
    *
    * @var ?string $sku
    */
    public ?string $sku;
    
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?string $entity_type
    */
    public ?string $entity_type;
    
    /**
    *
    * @var ?int $item_level_discount_amount
    */
    public ?int $item_level_discount_amount;
    
    /**
    *
    * @var ?int $discount_amount
    */
    public ?int $discount_amount;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_id" , "invoice_line_item_id" , "unit_price" , "description" , "amount" , "fulfillment_quantity" , "fulfillment_amount" , "tax_amount" , "amount_paid" , "amount_adjusted" , "refundable_credits_issued" , "refundable_credits" , "is_shippable" , "sku" , "status" , "entity_type" , "item_level_discount_amount" , "discount_amount" , "entity_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $invoice_id,
        ?string $invoice_line_item_id,
        ?int $unit_price,
        ?string $description,
        ?int $amount,
        ?int $fulfillment_quantity,
        ?int $fulfillment_amount,
        ?int $tax_amount,
        ?int $amount_paid,
        ?int $amount_adjusted,
        ?int $refundable_credits_issued,
        ?int $refundable_credits,
        ?bool $is_shippable,
        ?string $sku,
        ?string $status,
        ?string $entity_type,
        ?int $item_level_discount_amount,
        ?int $discount_amount,
        ?string $entity_id,
    )
    { 
        $this->id = $id;
        $this->invoice_id = $invoice_id;
        $this->invoice_line_item_id = $invoice_line_item_id;
        $this->unit_price = $unit_price;
        $this->description = $description;
        $this->amount = $amount;
        $this->fulfillment_quantity = $fulfillment_quantity;
        $this->fulfillment_amount = $fulfillment_amount;
        $this->tax_amount = $tax_amount;
        $this->amount_paid = $amount_paid;
        $this->amount_adjusted = $amount_adjusted;
        $this->refundable_credits_issued = $refundable_credits_issued;
        $this->refundable_credits = $refundable_credits;
        $this->is_shippable = $is_shippable;
        $this->sku = $sku;
        $this->status = $status;
        $this->entity_type = $entity_type;
        $this->item_level_discount_amount = $item_level_discount_amount;
        $this->discount_amount = $discount_amount;
        $this->entity_id = $entity_id;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['invoice_line_item_id'] ?? null,
        $resourceAttributes['unit_price'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['fulfillment_quantity'] ?? null,
        $resourceAttributes['fulfillment_amount'] ?? null,
        $resourceAttributes['tax_amount'] ?? null,
        $resourceAttributes['amount_paid'] ?? null,
        $resourceAttributes['amount_adjusted'] ?? null,
        $resourceAttributes['refundable_credits_issued'] ?? null,
        $resourceAttributes['refundable_credits'] ?? null,
        $resourceAttributes['is_shippable'] ?? null,
        $resourceAttributes['sku'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['entity_type'] ?? null,
        $resourceAttributes['item_level_discount_amount'] ?? null,
        $resourceAttributes['discount_amount'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'invoice_id' => $this->invoice_id,
        'invoice_line_item_id' => $this->invoice_line_item_id,
        'unit_price' => $this->unit_price,
        'description' => $this->description,
        'amount' => $this->amount,
        'fulfillment_quantity' => $this->fulfillment_quantity,
        'fulfillment_amount' => $this->fulfillment_amount,
        'tax_amount' => $this->tax_amount,
        'amount_paid' => $this->amount_paid,
        'amount_adjusted' => $this->amount_adjusted,
        'refundable_credits_issued' => $this->refundable_credits_issued,
        'refundable_credits' => $this->refundable_credits,
        'is_shippable' => $this->is_shippable,
        'sku' => $this->sku,
        'status' => $this->status,
        'entity_type' => $this->entity_type,
        'item_level_discount_amount' => $this->item_level_discount_amount,
        'discount_amount' => $this->discount_amount,
        'entity_id' => $this->entity_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>