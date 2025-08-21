<?php

namespace Chargebee\Resources\PaymentVoucher;

class LinkedInvoice  { 
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?string $txn_id
    */
    public ?string $txn_id;
    
    /**
    *
    * @var ?int $applied_at
    */
    public ?int $applied_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "invoice_id" , "txn_id" , "applied_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $invoice_id,
        ?string $txn_id,
        ?int $applied_at,
    )
    { 
        $this->invoice_id = $invoice_id;
        $this->txn_id = $txn_id;
        $this->applied_at = $applied_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['txn_id'] ?? null,
        $resourceAttributes['applied_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['invoice_id' => $this->invoice_id,
        'txn_id' => $this->txn_id,
        'applied_at' => $this->applied_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>