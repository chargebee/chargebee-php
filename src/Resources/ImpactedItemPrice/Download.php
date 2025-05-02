<?php

namespace Chargebee\Resources\ImpactedItemPrice;

class Download  { 
    /**
    *
    * @var ?string $download_url
    */
    public ?string $download_url;
    
    /**
    *
    * @var ?int $valid_till
    */
    public ?int $valid_till;
    
    /**
    *
    * @var ?string $mime_type
    */
    public ?string $mime_type;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "download_url" , "valid_till" , "mime_type"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $download_url,
        ?int $valid_till,
        ?string $mime_type,
    )
    { 
        $this->download_url = $download_url;
        $this->valid_till = $valid_till;
        $this->mime_type = $mime_type;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['download_url'] ?? null,
        $resourceAttributes['valid_till'] ?? null,
        $resourceAttributes['mime_type'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['download_url' => $this->download_url,
        'valid_till' => $this->valid_till,
        'mime_type' => $this->mime_type,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>