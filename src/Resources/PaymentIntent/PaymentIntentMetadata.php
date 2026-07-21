<?php

namespace Chargebee\Resources\PaymentIntent;

class PaymentIntentMetadata  { 
    /**
    *
    * @var ?string $source
    */
    public ?string $source;
    
    /**
    *
    * @var ?string $client_ip_address
    */
    public ?string $client_ip_address;
    
    /**
    *
    * @var ?string $user_agent
    */
    public ?string $user_agent;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "source" , "client_ip_address" , "user_agent" , "created_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $source,
        ?string $client_ip_address,
        ?string $user_agent,
        ?int $created_at,
    )
    { 
        $this->source = $source;
        $this->client_ip_address = $client_ip_address;
        $this->user_agent = $user_agent;
        $this->created_at = $created_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['source'] ?? null,
        $resourceAttributes['client_ip_address'] ?? null,
        $resourceAttributes['user_agent'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['source' => $this->source,
        'client_ip_address' => $this->client_ip_address,
        'user_agent' => $this->user_agent,
        'created_at' => $this->created_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>