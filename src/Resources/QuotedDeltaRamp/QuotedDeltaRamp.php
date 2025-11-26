<?php

namespace Chargebee\Resources\QuotedDeltaRamp;

class QuotedDeltaRamp  { 
    /**
    *
    * @var ?array<LineItem> $line_items
    */
    public ?array $line_items;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "line_items"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?array $line_items,
    )
    { 
        $this->line_items = $line_items;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $line_items = array_map(fn (array $result): LineItem =>  LineItem::from(
            $result
        ), $resourceAttributes['line_items'] ?? []);
        
        $returnData = new self( $line_items,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter([
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->line_items !== []){
            $data['line_items'] = array_map(
                fn (LineItem $line_items): array => $line_items->toArray(),
                $this->line_items
            );
        }

        
        return $data;
    }
}
?>