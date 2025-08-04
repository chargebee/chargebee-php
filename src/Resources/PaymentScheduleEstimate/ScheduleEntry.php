<?php

namespace Chargebee\Resources\PaymentScheduleEstimate;

class ScheduleEntry  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $date
    */
    public ?int $date;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?\Chargebee\Resources\PaymentScheduleEstimate\ClassBasedEnums\ScheduleEntryStatus $status
    */
    public ?\Chargebee\Resources\PaymentScheduleEstimate\ClassBasedEnums\ScheduleEntryStatus $status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "date" , "amount"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $date,
        ?int $amount,
        ?\Chargebee\Resources\PaymentScheduleEstimate\ClassBasedEnums\ScheduleEntryStatus $status,
    )
    { 
        $this->id = $id;
        $this->date = $date;
        $this->amount = $amount;  
        $this->status = $status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['date'] ?? null,
        $resourceAttributes['amount'] ?? null,
        
         
        isset($resourceAttributes['status']) ? \Chargebee\Resources\PaymentScheduleEstimate\ClassBasedEnums\ScheduleEntryStatus::tryFromValue($resourceAttributes['status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'date' => $this->date,
        'amount' => $this->amount,
        
        'status' => $this->status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>