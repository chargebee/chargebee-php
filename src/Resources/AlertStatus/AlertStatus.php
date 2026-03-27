<?php

namespace Chargebee\Resources\AlertStatus;

class AlertStatus  { 
    /**
    *
    * @var ?string $alert_id
    */
    public ?string $alert_id;
    
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?int $alarm_triggered_at
    */
    public ?int $alarm_triggered_at;
    
    /**
    *
    * @var ?\Chargebee\Enums\AlertStatus $alert_status
    */
    public ?\Chargebee\Enums\AlertStatus $alert_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "alert_id" , "subscription_id" , "alarm_triggered_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $alert_id,
        ?string $subscription_id,
        ?int $alarm_triggered_at,
        ?\Chargebee\Enums\AlertStatus $alert_status,
    )
    { 
        $this->alert_id = $alert_id;
        $this->subscription_id = $subscription_id;
        $this->alarm_triggered_at = $alarm_triggered_at; 
        $this->alert_status = $alert_status;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['alert_id'] ?? null,
        $resourceAttributes['subscription_id'] ?? null,
        $resourceAttributes['alarm_triggered_at'] ?? null,
        
        
        isset($resourceAttributes['alert_status']) ? \Chargebee\Enums\AlertStatus::tryFromValue($resourceAttributes['alert_status']) : null,
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['alert_id' => $this->alert_id,
        'subscription_id' => $this->subscription_id,
        'alarm_triggered_at' => $this->alarm_triggered_at,
        
        'alert_status' => $this->alert_status?->value,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>