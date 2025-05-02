<?php

namespace Chargebee\Responses\ItemResponse;
use Chargebee\Resources\Item\Item;

use Chargebee\ValueObjects\ResponseBase;

class UpdateItemResponse extends ResponseBase { 
    /**
    *
    * @var ?Item $item
    */
    public ?Item $item;
    

    private function __construct(
        ?Item $item,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->item = $item;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['item']) ? Item::from($resourceAttributes['item']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->item instanceof Item){
            $data['item'] = $this->item->toArray();
        } 

        return $data;
    }
}
?>