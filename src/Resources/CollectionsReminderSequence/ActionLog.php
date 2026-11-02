<?php

namespace Chargebee\Resources\CollectionsReminderSequence;

class ActionLog  { 
    /**
    *
    * @var ?string $action_type
    */
    public ?string $action_type;
    
    /**
    *
    * @var ?string $status
    */
    public ?string $status;
    
    /**
    *
    * @var ?string $reason_code
    */
    public ?string $reason_code;
    
    /**
    *
    * @var ?int $executed_at
    */
    public ?int $executed_at;
    
    /**
    *
    * @var ?int $scheduled_at
    */
    public ?int $scheduled_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "action_type" , "status" , "reason_code" , "executed_at" , "scheduled_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $action_type,
        ?string $status,
        ?string $reason_code,
        ?int $executed_at,
        ?int $scheduled_at,
    )
    { 
        $this->action_type = $action_type;
        $this->status = $status;
        $this->reason_code = $reason_code;
        $this->executed_at = $executed_at;
        $this->scheduled_at = $scheduled_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['action_type'] ?? null,
        $resourceAttributes['status'] ?? null,
        $resourceAttributes['reason_code'] ?? null,
        $resourceAttributes['executed_at'] ?? null,
        $resourceAttributes['scheduled_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['action_type' => $this->action_type,
        'status' => $this->status,
        'reason_code' => $this->reason_code,
        'executed_at' => $this->executed_at,
        'scheduled_at' => $this->scheduled_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>