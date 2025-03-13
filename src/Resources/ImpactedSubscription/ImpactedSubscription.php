<?php

namespace Chargebee\Resources\ImpactedSubscription;

class ImpactedSubscription  { 
    /**
    *
    * @var ?int $count
    */
    public ?int $count;
    
    /**
    *
    * @var ?Download $download
    */
    public ?Download $download;
    
    /**
    *
    * @var mixed $subscription_ids
    */
    public mixed $subscription_ids;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "count" , "download" , "subscription_ids"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $count,
        ?Download $download,
        mixed $subscription_ids,
    )
    { 
        $this->count = $count;
        $this->download = $download;
        $this->subscription_ids = $subscription_ids;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['count'] ?? null,
        isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
        $resourceAttributes['subscription_ids'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['count' => $this->count,
        
        'subscription_ids' => $this->subscription_ids,
        
        ], function ($value) {
            return $value !== null;
        });

        
        if($this->download instanceof Download){
            $data['download'] = $this->download->toArray();
        }
        

        
        return $data;
    }
}
?>