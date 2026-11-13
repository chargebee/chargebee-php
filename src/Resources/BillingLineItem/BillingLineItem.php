<?php

namespace Chargebee\Resources\BillingLineItem;

class BillingLineItem  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $invoice_number
    */
    public ?string $invoice_number;
    
    /**
    *
    * @var ?float $quantity
    */
    public ?float $quantity;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "invoice_number" , "quantity"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $invoice_number,
        ?float $quantity,
    )
    { 
        $this->id = $id;
        $this->invoice_number = $invoice_number;
        $this->quantity = $quantity;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['invoice_number'] ?? null,
        $resourceAttributes['quantity'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'invoice_number' => $this->invoice_number,
        'quantity' => $this->quantity,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>