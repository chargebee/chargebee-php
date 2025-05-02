<?php

namespace Chargebee\Resources\Purchase;

class Purchase  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $modified_at
    */
    public ?int $modified_at;
    
    /**
    *
    * @var ?string $subscription_ids
    */
    public ?string $subscription_ids;
    
    /**
    *
    * @var ?string $invoice_ids
    */
    public ?string $invoice_ids;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "customer_id" , "created_at" , "modified_at" , "subscription_ids" , "invoice_ids"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $customer_id,
        ?int $created_at,
        ?int $modified_at,
        ?string $subscription_ids,
        ?string $invoice_ids,
    )
    { 
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->created_at = $created_at;
        $this->modified_at = $modified_at;
        $this->subscription_ids = $subscription_ids;
        $this->invoice_ids = $invoice_ids;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['modified_at'] ?? null,
        $resourceAttributes['subscription_ids'] ?? null,
        $resourceAttributes['invoice_ids'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'customer_id' => $this->customer_id,
        'created_at' => $this->created_at,
        'modified_at' => $this->modified_at,
        'subscription_ids' => $this->subscription_ids,
        'invoice_ids' => $this->invoice_ids,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>