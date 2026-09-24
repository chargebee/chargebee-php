<?php

namespace Chargebee\Resources\PaymentSource;

class NetworkTransactionReference  { 
    /**
    *
    * @var ?string $original_network_transaction_id
    */
    public ?string $original_network_transaction_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "original_network_transaction_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $original_network_transaction_id,
    )
    { 
        $this->original_network_transaction_id = $original_network_transaction_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['original_network_transaction_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['original_network_transaction_id' => $this->original_network_transaction_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>