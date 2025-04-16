<?php

namespace Chargebee\Responses\ItemPriceResponse;
use Chargebee\Resources\ItemPrice\ItemPrice;

use Chargebee\ValueObjects\ResponseBase;

class CreateItemPriceResponse extends ResponseBase { 
    /**
    *
    * @var ItemPrice $item_price
    */
    public ItemPrice $item_price;
    

    private function __construct(
        ItemPrice $item_price,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->item_price = $item_price;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             ItemPrice::from($resourceAttributes['item_price']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'item_price' => $this->item_price->toArray(),
        ]);
        

        return $data;
    }
}
?>