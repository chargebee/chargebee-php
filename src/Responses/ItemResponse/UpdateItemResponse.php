<?php

namespace Chargebee\Responses\ItemResponse;
use Chargebee\Resources\Item\Item;

use Chargebee\ValueObjects\ResponseBase;

class UpdateItemResponse extends ResponseBase { 
    /**
    *
    * @var Item $item
    */
    public Item $item;
    

    private function __construct(
        Item $item,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->item = $item;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Item::from($resourceAttributes['item']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'item' => $this->item->toArray(),
        ]);
        

        return $data;
    }
}
?>