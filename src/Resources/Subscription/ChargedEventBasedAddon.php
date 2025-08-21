<?php

namespace Chargebee\Resources\Subscription;

class ChargedEventBasedAddon  { 
    /**
    *
    * @var ?string $id
    */
    public ?string $id;
    
    /**
    *
    * @var ?int $last_charged_at
    */
    public ?int $last_charged_at;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "id" , "last_charged_at"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $id,
        ?int $last_charged_at,
    )
    { 
        $this->id = $id;
        $this->last_charged_at = $last_charged_at;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['id'] ?? null,
        $resourceAttributes['last_charged_at'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['id' => $this->id,
        'last_charged_at' => $this->last_charged_at,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>