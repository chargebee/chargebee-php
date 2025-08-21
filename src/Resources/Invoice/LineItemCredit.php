<?php

namespace Chargebee\Resources\Invoice;

class LineItemCredit  { 
    /**
    *
    * @var ?string $cn_id
    */
    public ?string $cn_id;
    
    /**
    *
    * @var ?float $applied_amount
    */
    public ?float $applied_amount;
    
    /**
    *
    * @var ?string $line_item_id
    */
    public ?string $line_item_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "cn_id" , "applied_amount" , "line_item_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $cn_id,
        ?float $applied_amount,
        ?string $line_item_id,
    )
    { 
        $this->cn_id = $cn_id;
        $this->applied_amount = $applied_amount;
        $this->line_item_id = $line_item_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['cn_id'] ?? null,
        $resourceAttributes['applied_amount'] ?? null,
        $resourceAttributes['line_item_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['cn_id' => $this->cn_id,
        'applied_amount' => $this->applied_amount,
        'line_item_id' => $this->line_item_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>