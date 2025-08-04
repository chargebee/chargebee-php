<?php

namespace Chargebee\Resources\Transaction;

class LinkedInvoice  { 
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var ?int $applied_amount
    */
    public ?int $applied_amount;
    
    /**
    *
    * @var ?int $applied_at
    */
    public ?int $applied_at;
    
    /**
    *
    * @var ?int $invoice_date
    */
    public ?int $invoice_date;
    
    /**
    *
    * @var ?int $invoice_total
    */
    public ?int $invoice_total;
    
    /**
    *
    * @var ?\Chargebee\Resources\Invoice\ClassBasedEnums\Status $invoice_status
    */
    public ?\Chargebee\Resources\Invoice\ClassBasedEnums\Status $invoice_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "invoice_id" , "applied_amount" , "applied_at" , "invoice_date" , "invoice_total"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $invoice_id,
        ?int $applied_amount,
        ?int $applied_at,
        ?int $invoice_date,
        ?int $invoice_total,
        ?\Chargebee\Resources\Invoice\ClassBasedEnums\Status $invoice_status,
    )
    { 
        $this->invoice_id = $invoice_id;
        $this->applied_amount = $applied_amount;
        $this->applied_at = $applied_at;
        $this->invoice_date = $invoice_date;
        $this->invoice_total = $invoice_total;  
        $this->invoice_status = $invoice_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['invoice_id'] ?? null,
        $resourceAttributes['applied_amount'] ?? null,
        $resourceAttributes['applied_at'] ?? null,
        $resourceAttributes['invoice_date'] ?? null,
        $resourceAttributes['invoice_total'] ?? null,
        
         
        isset($resourceAttributes['invoice_status']) ? \Chargebee\Resources\Invoice\ClassBasedEnums\Status::tryFromValue($resourceAttributes['invoice_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['invoice_id' => $this->invoice_id,
        'applied_amount' => $this->applied_amount,
        'applied_at' => $this->applied_at,
        'invoice_date' => $this->invoice_date,
        'invoice_total' => $this->invoice_total,
        
        'invoice_status' => $this->invoice_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>