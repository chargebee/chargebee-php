<?php

namespace Chargebee\Resources\PricingPageSession;

class PricingPageSession  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?int $created_at
    */
    public ?int $created_at;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "url" , "created_at" , "expires_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?string $url,
        ?int $created_at,
        ?int $expires_at,
    )
    { 
        $this->id = $id;
        $this->url = $url;
        $this->created_at = $created_at;
        $this->expires_at = $expires_at;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['url'] ?? null,
        $resourceAttributes['created_at'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['id' => $this->id,
        'url' => $this->url,
        'created_at' => $this->created_at,
        'expires_at' => $this->expires_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>