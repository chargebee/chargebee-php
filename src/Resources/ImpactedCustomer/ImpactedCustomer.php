<?php

namespace Chargebee\Resources\ImpactedCustomer;

class ImpactedCustomer  { 
    /**
    *
    * @var ?string $action_type
    */
    public ?string $action_type;
    
    /**
    *
    * @var ?Download $download
    */
    public ?Download $download;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "action_type" , "download"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $action_type,
        ?Download $download,
    )
    { 
        $this->action_type = $action_type;
        $this->download = $download;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['action_type'] ?? null,
        isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['action_type' => $this->action_type,
        
        
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