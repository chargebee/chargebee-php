<?php

namespace Chargebee\Resources\Usage;

class Usage  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $usage_date
    */
    public ?int $usage_date;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    *
    * @var ?string $quantity
    */
    public ?string $quantity;
    
    /**
    *
    * @var ?string $note
    */
    public ?string $note;
    
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
    * @var ?\Chargebee\Enums\Source $source
    */
    public ?\Chargebee\Enums\Source $source;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "usage_date" , "subscription_id" , "item_price_id" , "invoice_id" , "line_item_id" , "quantity" , "note" , "resource_version" , "updated_at" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $usage_date,
        ?string $subscription_id,
        ?string $item_price_id,
        ?string $invoice_id,
        ?string $line_item_id,
        ?string $quantity,
        ?string $note,
        ?int $resource_version,
        ?int $updated_at,
        ?int $created_at,
        ?\Chargebee\Enums\Source $source,
    )
    { 
        $this->id = $id;
        $this->usage_date = $usage_date;
        $this->subscription_id = $subscription_id;
        $this->item_price_id = $item_price_id;
        $this->invoice_id = $invoice_id;
        $this->line_item_id = $line_item_id;
        $this->quantity = $quantity;
        $this->note = $note;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at; 
        $this->source = $source; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['usage_date'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['item_price_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['line_item_id'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        $resourceAttributes['note'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
        
        isset($resourceAttributes['source']) ? \Chargebee\Enums\Source::tryFromValue($resourceAttributes['source']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'usage_date' => $this->usage_date,
        'subscription_id' => $this->subscription_id,
        'item_price_id' => $this->item_price_id,
        'invoice_id' => $this->invoice_id,
        'line_item_id' => $this->line_item_id,
        'quantity' => $this->quantity,
        'note' => $this->note,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        'created_at' => $this->created_at,
        
        'source' => $this->source?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>