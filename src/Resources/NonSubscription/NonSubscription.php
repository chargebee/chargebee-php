<?php

namespace Chargebee\Resources\NonSubscription;

class NonSubscription  { 
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $app_id
    */
    public ?string $app_id;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $charge_id
    */
    public ?string $charge_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "app_id" , "invoice_id" , "customer_id" , "charge_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $app_id,
        ?string $invoice_id,
        ?string $customer_id,
        ?string $charge_id,
    )
    { 
        $this->app_id = $app_id;
        $this->invoice_id = $invoice_id;
        $this->customer_id = $customer_id;
        $this->charge_id = $charge_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['app_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['charge_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['app_id' => $this->app_id,
        'invoice_id' => $this->invoice_id,
        'customer_id' => $this->customer_id,
        'charge_id' => $this->charge_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>