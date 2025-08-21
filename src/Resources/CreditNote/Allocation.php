<?php

namespace Chargebee\Resources\CreditNote;

class Allocation  { 
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?int $allocated_amount
    */
    public ?int $allocated_amount;
    
    /**
    *
    * @var ?int $allocated_at
    */
    public ?int $allocated_at;
    
    /**
    *
    * @var ?int $invoice_date
    */
    public ?int $invoice_date;
    
    /**
    *
    * @var ?string $invoice_status
    */
    public ?string $invoice_status;
    
    /**
    *
    * @var ?string $tax_application
    */
    public ?string $tax_application;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "invoice_id" , "allocated_amount" , "allocated_at" , "invoice_date" , "invoice_status" , "tax_application"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $invoice_id,
        ?int $allocated_amount,
        ?int $allocated_at,
        ?int $invoice_date,
        ?string $invoice_status,
        ?string $tax_application,
    )
    { 
        $this->invoice_id = $invoice_id;
        $this->allocated_amount = $allocated_amount;
        $this->allocated_at = $allocated_at;
        $this->invoice_date = $invoice_date;
        $this->invoice_status = $invoice_status;
        $this->tax_application = $tax_application;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['allocated_amount'] ?? null,
        $resourceAttributes['allocated_at'] ?? null,
        $resourceAttributes['invoice_date'] ?? null,
        $resourceAttributes['invoice_status'] ?? null,
        $resourceAttributes['tax_application'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['invoice_id' => $this->invoice_id,
        'allocated_amount' => $this->allocated_amount,
        'allocated_at' => $this->allocated_at,
        'invoice_date' => $this->invoice_date,
        'invoice_status' => $this->invoice_status,
        'tax_application' => $this->tax_application,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>