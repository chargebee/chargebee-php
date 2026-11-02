<?php

namespace Chargebee\Resources\PreferenceVariant;

class PreferenceVariant  { 
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?string $value
    */
    public ?string $value;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?bool $allow_override_in_interface
    */
    public ?bool $allow_override_in_interface;
    
    /**
    *@deprecated This attribute is deprecated and will be removed in future version.
    * @var ?bool $allow_override_in_api
    */
    public ?bool $allow_override_in_api;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "value" , "allow_override_in_interface" , "allow_override_in_api"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $value,
        ?bool $allow_override_in_interface,
        ?bool $allow_override_in_api,
    )
    { 
        $this->value = $value;
        $this->allow_override_in_interface = $allow_override_in_interface;
        $this->allow_override_in_api = $allow_override_in_api;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['value'] ?? null,
        $resourceAttributes['allow_override_in_interface'] ?? null,
        $resourceAttributes['allow_override_in_api'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['value' => $this->value,
        'allow_override_in_interface' => $this->allow_override_in_interface,
        'allow_override_in_api' => $this->allow_override_in_api,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>