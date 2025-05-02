<?php

namespace Chargebee\Resources\TimeMachine;

class TimeMachine  { 
    /**
    *
    * @var ?string $name
    */
    public ?string $name;
    
    /**
    *
    * @var ?int $genesis_time
    */
    public ?int $genesis_time;
    
    /**
    *
    * @var ?int $destination_time
    */
    public ?int $destination_time;
    
    /**
    *
    * @var ?string $failure_code
    */
    public ?string $failure_code;
    
    /**
    *
    * @var ?string $failure_reason
    */
    public ?string $failure_reason;
    
    /**
    *
    * @var ?string $error_json
    */
    public ?string $error_json;
    
    /**
    *
    * @var ?\Chargebee\Resources\TimeMachine\Enums\TimeTravelStatus $time_travel_status
    */
    public ?\Chargebee\Resources\TimeMachine\Enums\TimeTravelStatus $time_travel_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "name" , "genesis_time" , "destination_time" , "failure_code" , "failure_reason" , "error_json"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $name,
        ?int $genesis_time,
        ?int $destination_time,
        ?string $failure_code,
        ?string $failure_reason,
        ?string $error_json,
        ?\Chargebee\Resources\TimeMachine\Enums\TimeTravelStatus $time_travel_status,
    )
    { 
        $this->name = $name;
        $this->genesis_time = $genesis_time;
        $this->destination_time = $destination_time;
        $this->failure_code = $failure_code;
        $this->failure_reason = $failure_reason;
        $this->error_json = $error_json;  
        $this->time_travel_status = $time_travel_status;
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['name'] ?? null,
        $resourceAttributes['genesis_time'] ?? null,
        $resourceAttributes['destination_time'] ?? null,
        $resourceAttributes['failure_code'] ?? null,
        $resourceAttributes['failure_reason'] ?? null,
        $resourceAttributes['error_json'] ?? null,
        
         
        isset($resourceAttributes['time_travel_status']) ? \Chargebee\Resources\TimeMachine\Enums\TimeTravelStatus::tryFromValue($resourceAttributes['time_travel_status']) : null,
        
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['name' => $this->name,
        'genesis_time' => $this->genesis_time,
        'destination_time' => $this->destination_time,
        'failure_code' => $this->failure_code,
        'failure_reason' => $this->failure_reason,
        'error_json' => $this->error_json,
        
        'time_travel_status' => $this->time_travel_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>