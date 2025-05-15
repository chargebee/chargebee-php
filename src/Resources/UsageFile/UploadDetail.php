<?php

namespace Chargebee\Resources\UsageFile;

class UploadDetail  { 
    /**
    *
    * @var ?string $url
    */
    public ?string $url;
    
    /**
    *
    * @var ?int $expires_at
    */
    public ?int $expires_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "url" , "expires_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $url,
        ?int $expires_at,
    )
    { 
        $this->url = $url;
        $this->expires_at = $expires_at;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['url'] ?? null,
        $resourceAttributes['expires_at'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['url' => $this->url,
        'expires_at' => $this->expires_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>