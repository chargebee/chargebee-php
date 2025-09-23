<?php

namespace Chargebee\Resources\OfferFulfillment;

class Error  { 
    /**
    *
    * @var ?string $code
    */
    public ?string $code;
    
    /**
    *
    * @var ?string $message
    */
    public ?string $message;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "code" , "message"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $code,
        ?string $message,
    )
    { 
        $this->code = $code;
        $this->message = $message;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['code'] ?? null,
        $resourceAttributes['message'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['code' => $this->code,
        'message' => $this->message,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>