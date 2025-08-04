<?php

namespace Chargebee\Resources\Order;

class LinkedCreditNote  { 
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $amount_adjusted
    */
    public ?int $amount_adjusted;
    
    /**
    *
    * @var ?int $amount_refunded
    */
    public ?int $amount_refunded;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteType $type
    */
    public ?\Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteType $type;
    
    /**
    *
    * @var ?\Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteStatus $status
    */
    public ?\Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteStatus $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "amount" , "id" , "amount_adjusted" , "amount_refunded"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $amount,
        ?string $id,
        ?int $amount_adjusted,
        ?int $amount_refunded,
        ?\Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteType $type,
        ?\Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteStatus $status,
    )
    { 
        $this->amount = $amount;
        $this->id = $id;
        $this->amount_adjusted = $amount_adjusted;
        $this->amount_refunded = $amount_refunded;  
        $this->type = $type;
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['amount'] ?? null,
        $resourceAttributes['id'] ?? null,
        $resourceAttributes['amount_adjusted'] ?? null,
        $resourceAttributes['amount_refunded'] ?? null,
        
         
        isset($resourceAttributes['type']) ? \Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteType::tryFromValue($resourceAttributes['type']) : null,
        
        isset($resourceAttributes['status']) ? \Chargebee\Resources\Order\ClassBasedEnums\LinkedCreditNoteStatus::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['amount' => $this->amount,
        'id' => $this->id,
        'amount_adjusted' => $this->amount_adjusted,
        'amount_refunded' => $this->amount_refunded,
        
        'type' => $this->type?->value,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>