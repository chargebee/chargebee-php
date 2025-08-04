<?php

namespace Chargebee\Resources\AdvanceInvoiceSchedule;

class FixedIntervalSchedule  { 
    /**
    *
    * @var ?int $number_of_occurrences
    */
    public ?int $number_of_occurrences;
    
    /**
    *
    * @var ?int $days_before_renewal
    */
    public ?int $days_before_renewal;
    
    /**
    *
    * @var ?int $end_date
    */
    public ?int $end_date;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $terms_to_charge
    */
    public ?int $terms_to_charge;
    
    /**
    *
    * @var ?\Chargebee\ClassBasedEnums\EndScheduleOn $end_schedule_on
    */
    public ?\Chargebee\ClassBasedEnums\EndScheduleOn $end_schedule_on;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "number_of_occurrences" , "days_before_renewal" , "end_date" , "created_at" , "terms_to_charge"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $number_of_occurrences,
        ?int $days_before_renewal,
        ?int $end_date,
        ?int $created_at,
        ?int $terms_to_charge,
        ?\Chargebee\ClassBasedEnums\EndScheduleOn $end_schedule_on,
    )
    { 
        $this->number_of_occurrences = $number_of_occurrences;
        $this->days_before_renewal = $days_before_renewal;
        $this->end_date = $end_date;
        $this->created_at = $created_at;
        $this->terms_to_charge = $terms_to_charge; 
        $this->end_schedule_on = $end_schedule_on; 
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['number_of_occurrences'] ?? null,
        $resourceAttributes['days_before_renewal'] ?? null,
        $resourceAttributes['end_date'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['terms_to_charge'] ?? null,
        
        
        isset($resourceAttributes['end_schedule_on']) ? \Chargebee\ClassBasedEnums\EndScheduleOn::tryFromValue($resourceAttributes['end_schedule_on']) : null,
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['number_of_occurrences' => $this->number_of_occurrences,
        'days_before_renewal' => $this->days_before_renewal,
        'end_date' => $this->end_date,
        'created_at' => $this->created_at,
        'terms_to_charge' => $this->terms_to_charge,
        
        'end_schedule_on' => $this->end_schedule_on?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>