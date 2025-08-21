<?php

namespace Chargebee\Resources\PaymentSchedule;

class PaymentSchedule  { 
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
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $resource_version
    */
    public ?int $resource_version;
    
    /**
    *
    * @var ?int $updated_at
    */
    public ?int $updated_at;
    
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
    * @var ?\Chargebee\Resources\PaymentSchedule\Enums\EntityType $entity_type
    */
    public ?\Chargebee\Resources\PaymentSchedule\Enums\EntityType $entity_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "scheme_id" , "entity_id" , "amount" , "created_at" , "resource_version" , "updated_at" , "currency_code" , "schedule_entries"  ];

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
        ?int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?string $currency_code,
        ?array $schedule_entries,
        ?\Chargebee\Resources\PaymentSchedule\Enums\EntityType $entity_type,
    )
    { 
        $this->id = $id;
        $this->scheme_id = $scheme_id;
        $this->entity_id = $entity_id;
        $this->amount = $amount;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
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
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $resourceAttributes['currency_code'] ?? null,
        $schedule_entries,
        
         
        isset($resourceAttributes['entity_type']) ? \Chargebee\Resources\PaymentSchedule\Enums\EntityType::tryFromValue($resourceAttributes['entity_type']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'scheme_id' => $this->scheme_id,
        'entity_id' => $this->entity_id,
        'amount' => $this->amount,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
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