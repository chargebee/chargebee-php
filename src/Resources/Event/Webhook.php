<?php

namespace Chargebee\Resources\Event;

class Webhook  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $webhook_status
    */
    public ?string $webhook_status;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "webhook_status"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $webhook_status,
    )
    { 
        $this->id = $id;
        $this->webhook_status = $webhook_status;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['webhook_status'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'webhook_status' => $this->webhook_status,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>