<?php

namespace Chargebee\Resources\ImpactedItem;

class ImpactedItem  { 
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
    * @var mixed $items
    */
    public mixed $items;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "count" , "download" , "items"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?int $count,
        ?Download $download,
        mixed $items,
    )
    { 
        $this->count = $count;
        $this->download = $download;
        $this->items = $items;  
    }

    public static function from(array $resourceAttributes): self
    { 
        $returnData = new self( $resourceAttributes['count'] ?? null,
        isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
        $resourceAttributes['items'] ?? null,
        
         
        );
       
        return $returnData;
    }

    public function toArray(): array
    {

        $data = array_filter(['count' => $this->count,
        
        'items' => $this->items,
        
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