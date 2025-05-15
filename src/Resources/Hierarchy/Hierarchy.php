<?php

namespace Chargebee\Resources\Hierarchy;

class Hierarchy  { 
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
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
    *
    * @var ?array<string> $children_ids
    */
    public ?array $children_ids;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "customer_id" , "parent_id" , "payment_owner_id" , "invoice_owner_id" , "children_ids"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $customer_id,
        ?string $parent_id,
        ?string $payment_owner_id,
        ?string $invoice_owner_id,
        ?array $children_ids,
    )
    { 
        $this->customer_id = $customer_id;
        $this->parent_id = $parent_id;
        $this->payment_owner_id = $payment_owner_id;
        $this->invoice_owner_id = $invoice_owner_id;
        $this->children_ids = $children_ids;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['parent_id'] ?? null,
        $resourceAttributes['payment_owner_id'] ?? null,
        $resourceAttributes['invoice_owner_id'] ?? null,
        $resourceAttributes['children_ids'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['customer_id' => $this->customer_id,
        'parent_id' => $this->parent_id,
        'payment_owner_id' => $this->payment_owner_id,
        'invoice_owner_id' => $this->invoice_owner_id,
        'children_ids' => $this->children_ids,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>