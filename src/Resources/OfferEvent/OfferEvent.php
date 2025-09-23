<?php

namespace Chargebee\Resources\OfferEvent;

class OfferEvent  { 
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
    )
    {    
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( 
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter([
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>