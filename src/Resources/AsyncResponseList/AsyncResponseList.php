<?php

namespace Chargebee\Resources\AsyncResponseList;

class AsyncResponseList  { 
    /**
    *
    * @var ?array<\Chargebee\Resources\AsyncResponse\AsyncResponse> $list
    */
    public ?array $list;
    
    /**
    * @var array<string> $knownFields
    */
    protected static array $knownFields = [ "list"  ];

    /**
    * dynamic properties for resources
    * @var array<mixed> $_data;
    */
    protected $_data = [];

    private function __construct(
        ?array $list,
    )
    { 
        $this->list = $list;   
    }

    public static function from(array $resourceAttributes): self
    { 
        $list = array_map(fn (array $result): \Chargebee\Resources\AsyncResponse\AsyncResponse =>  \Chargebee\Resources\AsyncResponse\AsyncResponse::from(
            $result
        ), $resourceAttributes['list'] ?? []);
        
        $returnData = new self( $list,
        
          
        );
       
        return $returnData;
    }

    public function toArray(): array
    {
        
        $data = array_filter([
        
        ], function ($value) {
            return $value !== null;
        });

        
        
        if($this->list !== []){
            $data['list'] = array_map(
                fn (\Chargebee\Resources\AsyncResponse\AsyncResponse $list): array => $list->toArray(),
                $this->list
            );
        }

        
        return $data;
    }
}
?>