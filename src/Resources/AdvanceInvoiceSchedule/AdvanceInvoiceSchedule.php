<?php

namespace Chargebee\Resources\AdvanceInvoiceSchedule;

class AdvanceInvoiceSchedule  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?FixedIntervalSchedule $fixed_interval_schedule
    */
    public ?FixedIntervalSchedule $fixed_interval_schedule;
    
    /**
    *
    * @var ?SpecificDatesSchedule $specific_dates_schedule
    */
    public ?SpecificDatesSchedule $specific_dates_schedule;
    
    /**
    *
    * @var ?\Chargebee\Resources\AdvanceInvoiceSchedule\Enums\ScheduleType $schedule_type
    */
    public ?\Chargebee\Resources\AdvanceInvoiceSchedule\Enums\ScheduleType $schedule_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "fixed_interval_schedule" , "specific_dates_schedule"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?FixedIntervalSchedule $fixed_interval_schedule,
        ?SpecificDatesSchedule $specific_dates_schedule,
        ?\Chargebee\Resources\AdvanceInvoiceSchedule\Enums\ScheduleType $schedule_type,
    )
    { 
        $this->id = $id;
        $this->fixed_interval_schedule = $fixed_interval_schedule;
        $this->specific_dates_schedule = $specific_dates_schedule;  
        $this->schedule_type = $schedule_type;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        isset($resourceAttributes['fixed_interval_schedule']) ? FixedIntervalSchedule::from($resourceAttributes['fixed_interval_schedule']) : null,
        isset($resourceAttributes['specific_dates_schedule']) ? SpecificDatesSchedule::from($resourceAttributes['specific_dates_schedule']) : null,
        
         
        isset($resourceAttributes['schedule_type']) ? \Chargebee\Resources\AdvanceInvoiceSchedule\Enums\ScheduleType::tryFromValue($resourceAttributes['schedule_type']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        
        
        
        'schedule_type' => $this->schedule_type?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->fixed_interval_schedule instanceof FixedIntervalSchedule){
            $data['fixed_interval_schedule'] = $this->fixed_interval_schedule->toArray();
        }
        if($this->specific_dates_schedule instanceof SpecificDatesSchedule){
            $data['specific_dates_schedule'] = $this->specific_dates_schedule->toArray();
        }
        

        
        return $data;
    }
}
?>