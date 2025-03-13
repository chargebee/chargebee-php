<?php

namespace Chargebee\Resources\PaymentScheduleScheme;

class PaymentScheduleScheme  { 
    /**
    *
    * @var string $id
    */
    public string $id;
    
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?string $description
    */
    public ?string $description;
    
    /**
    *
    * @var int $number_of_schedules
    */
    public int $number_of_schedules;
    
    /**
    *
    * @var ?int $period
    */
    public ?int $period;
    
    /**
    *
    * @var int $created_at
    */
    public int $created_at;
    
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
    * @var ?array<PreferredSchedule> $preferred_schedules
    */
    public ?array $preferred_schedules;
    
    /**
    *
    * @var \Chargebee\Resources\PaymentScheduleScheme\Enums\PeriodUnit $period_unit
    */
    public \Chargebee\Resources\PaymentScheduleScheme\Enums\PeriodUnit $period_unit;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "name" , "description" , "number_of_schedules" , "period" , "created_at" , "resource_version" , "updated_at" , "preferred_schedules"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        string $id,
        ?string $name,
        ?string $description,
        int $number_of_schedules,
        ?int $period,
        int $created_at,
        ?int $resource_version,
        ?int $updated_at,
        ?array $preferred_schedules,
        \Chargebee\Resources\PaymentScheduleScheme\Enums\PeriodUnit $period_unit,
    )
    { 
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->number_of_schedules = $number_of_schedules;
        $this->period = $period;
        $this->created_at = $created_at;
        $this->resource_version = $resource_version;
        $this->updated_at = $updated_at;
        $this->preferred_schedules = $preferred_schedules;  
        $this->period_unit = $period_unit;
    }

    public static function from(array $resourceAttributes): self
    { 
        $preferred_schedules = array_map(fn (array $result): PreferredSchedule =>  PreferredSchedule::from(
            $result
        ), $resourceAttributes['preferred_schedules'] ?? []);
        
        $returnData = new self( $resourceAttributes['id'] ,
        $resourceAttributes['name'] ?? null,
        $resourceAttributes['description'] ?? null,
        $resourceAttributes['number_of_schedules'] ,
        $resourceAttributes['period'] ?? null,
        $resourceAttributes['created_at'] ,
        $resourceAttributes['resource_version'] ?? null,
        $resourceAttributes['updated_at'] ?? null,
        $preferred_schedules,
        
         
        isset($resourceAttributes['period_unit']) ? \Chargebee\Resources\PaymentScheduleScheme\Enums\PeriodUnit::tryFromValue($resourceAttributes['period_unit']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'name' => $this->name,
        'description' => $this->description,
        'number_of_schedules' => $this->number_of_schedules,
        'period' => $this->period,
        'created_at' => $this->created_at,
        'resource_version' => $this->resource_version,
        'updated_at' => $this->updated_at,
        
        
        'period_unit' => $this->period_unit?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->preferred_schedules !== []){
            $data['preferred_schedules'] = array_map(
                fn (PreferredSchedule $preferred_schedules): array => $preferred_schedules->toArray(),
                $this->preferred_schedules
            );
        }

        
        return $data;
    }
}
?>