<?php

namespace Chargebee\Resources\BillingMetadata;

class BillingMetadata  { 
    /**
    *
    * @var ?string $item_price_id
    */
    public ?string $item_price_id;
    
    /**
    *
    * @var ?array<\Chargebee\Resources\BillingLineItem\BillingLineItem> $line_items
    */
    public ?array $line_items;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "item_price_id" , "line_items"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $item_price_id,
        ?array $line_items,
    )
    { 
        $this->item_price_id = $item_price_id;
        $this->line_items = $line_items;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $line_items = array_map(fn (array $result): \Chargebee\Resources\BillingLineItem\BillingLineItem =>  \Chargebee\Resources\BillingLineItem\BillingLineItem::from(
            $result
        ), $resourceAttributes['line_items'] ?? []);
        
        $returnData = new self( $resourceAttributes['item_price_id'] ?? null,
        $line_items,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['item_price_id' => $this->item_price_id,
        
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->line_items !== []){
            $data['line_items'] = array_map(
                fn (\Chargebee\Resources\BillingLineItem\BillingLineItem $line_items): array => $line_items->toArray(),
                $this->line_items
            );
        }

        
        return $data;
    }
}
?>