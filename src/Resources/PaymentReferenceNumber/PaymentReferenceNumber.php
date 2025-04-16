<?php

namespace Chargebee\Resources\PaymentReferenceNumber;

class PaymentReferenceNumber  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var string $number
    */
    public string $number;
    
    /**
    *
    * @var ?string $invoice_id
    */
    public ?string $invoice_id;
    
    /**
    *
    * @var \Chargebee\Resources\PaymentReferenceNumber\Enums\Type $type
    */
    public \Chargebee\Resources\PaymentReferenceNumber\Enums\Type $type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "number" , "invoice_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        string $number,
        ?string $invoice_id,
        \Chargebee\Resources\PaymentReferenceNumber\Enums\Type $type,
    )
    { 
        $this->id = $id;
        $this->number = $number;
        $this->invoice_id = $invoice_id;  
        $this->type = $type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['number'] ,
        $resourceAttributes['invoice_id'] ?? null,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\PaymentReferenceNumber\Enums\Type::tryFromValue($resourceAttributes['type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'number' => $this->number,
        'invoice_id' => $this->invoice_id,
        
        'type' => $this->type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>