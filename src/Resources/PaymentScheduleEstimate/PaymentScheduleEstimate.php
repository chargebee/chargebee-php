<?php

namespace Chargebee\Resources\PaymentScheduleEstimate;

class PaymentScheduleEstimate  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $scheme_id
    */
    public ?string $scheme_id;
    
    /**
    *
    * @var ?string $entity_id
    */
    public ?string $entity_id;
    
    /**
    *
    * @var ?int $amount
    */
    public ?int $amount;
    
    /**
    *
    * @var ?string $currency_code
    */
    public ?string $currency_code;
    
    /**
    *
    * @var ?array<ScheduleEntry> $schedule_entries
    */
    public ?array $schedule_entries;
    
    /**
    *
    * @var ?\Chargebee\Resources\PaymentScheduleEstimate\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\PaymentScheduleEstimate\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "scheme_id" , "entity_id" , "amount" , "currency_code" , "schedule_entries"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $scheme_id,
        ?string $entity_id,
        ?int $amount,
        ?string $currency_code,
        ?array $schedule_entries,
        ?\Chargebee\Resources\PaymentScheduleEstimate\Enums\EntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->scheme_id = $scheme_id;
        $this->entity_id = $entity_id;
        $this->amount = $amount;
        $this->currency_code = $currency_code;
        $this->schedule_entries = $schedule_entries;  
        $this->entity_type = $entity_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $schedule_entries = array_map(fn (array $result): ScheduleEntry =>  ScheduleEntry::from(
            $result
        ), $resourceAttributes['schedule_entries'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['scheme_id'] ?? null,
        $resourceAttributes['entity_id'] ?? null,
        $resourceAttributes['amount'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $schedule_entries,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\PaymentScheduleEstimate\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'scheme_id' => $this->scheme_id,
        'entity_id' => $this->entity_id,
        'amount' => $this->amount,
        'currency_code' => $this->currency_code,
        
        
        'entity_type' => $this->entity_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->schedule_entries !== []){
            $data['schedule_entries'] = array_map(
                fn (ScheduleEntry $schedule_entries): array => $schedule_entries->toArray(),
                $this->schedule_entries
            );
        }

        
        return $data;
    }
}
?>