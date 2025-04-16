<?php

namespace Chargebee\Resources\ImpactedItemPrice;

class ImpactedItemPrice  { 
    /**
    *
    * @var ?int $count
    */
    public ?int $count;
    
    /**
    *
    * @var ?Download $download
    */
    public ?Download $download;
    
    /**
    *
    * @var mixed $item_prices
    */
    public mixed $item_prices;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "count" , "download" , "item_prices"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $count,
        ?Download $download,
        mixed $item_prices,
    )
    { 
        $this->count = $count;
        $this->download = $download;
        $this->item_prices = $item_prices;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['count'] ?? null,
        isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
        $resourceAttributes['item_prices'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['count' => $this->count,
        
        'item_prices' => $this->item_prices,
        
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