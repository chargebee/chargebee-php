<?php

namespace Chargebee\Resources\Customer;

class Relationship  { 
    /**
    *
    * @var ?string $parent_id
    */
    public ?string $parent_id;
    
    /**
    *
    * @var ?string $payment_owner_id
    */
    public ?string $payment_owner_id;
    
    /**
    *
    * @var ?string $invoice_owner_id
    */
    public ?string $invoice_owner_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "parent_id" , "payment_owner_id" , "invoice_owner_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $parent_id,
        ?string $payment_owner_id,
        ?string $invoice_owner_id,
    )
    { 
        $this->parent_id = $parent_id;
        $this->payment_owner_id = $payment_owner_id;
        $this->invoice_owner_id = $invoice_owner_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['parent_id'] ?? null,
        $resourceAttributes['payment_owner_id'] ?? null,
        $resourceAttributes['invoice_owner_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['parent_id' => $this->parent_id,
        'payment_owner_id' => $this->payment_owner_id,
        'invoice_owner_id' => $this->invoice_owner_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>