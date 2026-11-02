<?php

namespace Chargebee\Resources\PaymentSource;

class NetworkTransactionReference  { 
    /**
    *
    * @var ?string $original_network_transaction_id
    */
    public ?string $original_network_transaction_id;
    
    /**
    *
    * @var ?string $transaction_link_id
    */
    public ?string $transaction_link_id;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "original_network_transaction_id" , "transaction_link_id"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?string $original_network_transaction_id,
        ?string $transaction_link_id,
    )
    { 
        $this->original_network_transaction_id = $original_network_transaction_id;
        $this->transaction_link_id = $transaction_link_id;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['original_network_transaction_id'] ?? null,
        $resourceAttributes['transaction_link_id'] ?? null,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter(['original_network_transaction_id' => $this->original_network_transaction_id,
        'transaction_link_id' => $this->transaction_link_id,
        
        ], function ($value) {
            return $value !== null;
        });

        
        

        
        return $data;
    }
}
?>