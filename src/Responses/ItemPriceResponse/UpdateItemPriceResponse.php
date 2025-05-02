<?php

namespace Chargebee\Responses\ItemPriceResponse;
use Chargebee\Resources\ItemPrice\ItemPrice;

use Chargebee\ValueObjects\ResponseBase;

class UpdateItemPriceResponse extends ResponseBase { 
    /**
    *
    * @var ?ItemPrice $item_price
    */
    public ?ItemPrice $item_price;
    

    private function __construct(
        ?ItemPrice $item_price,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->item_price = $item_price;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['item_price']) ? ItemPrice::from($resourceAttributes['item_price']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->item_price instanceof ItemPrice){
            $data['item_price'] = $this->item_price->toArray();
        } 

        return $data;
    }
}
?>