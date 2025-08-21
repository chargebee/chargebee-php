<?php

namespace Chargebee\Resources\Gift;

class Gifter  { 
    /**
    *
    * @var ?string $customer_id
    */
    public ?string $customer_id;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $signature
    */
    public ?string $signature;
    
    /**
    *
    * @var ?string $note
    */
    public ?string $note;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "customer_id" , "invoice_id" , "signature" , "note"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $customer_id,
        ?string $invoice_id,
        ?string $signature,
        ?string $note,
    )
    { 
        $this->customer_id = $customer_id;
        $this->invoice_id = $invoice_id;
        $this->signature = $signature;
        $this->note = $note;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['customer_id'] ?? null,
        $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['signature'] ?? null,
        $resourceAttributes['note'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['customer_id' => $this->customer_id,
        'invoice_id' => $this->invoice_id,
        'signature' => $this->signature,
        'note' => $this->note,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>