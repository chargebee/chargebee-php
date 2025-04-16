<?php

namespace Chargebee\Responses\ItemFamilyResponse;
use Chargebee\Resources\ItemFamily\ItemFamily;

use Chargebee\ValueObjects\ResponseBase;

class UpdateItemFamilyResponse extends ResponseBase { 
    /**
    *
    * @var ItemFamily $item_family
    */
    public ItemFamily $item_family;
    

    private function __construct(
        ItemFamily $item_family,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->item_family = $item_family;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             ItemFamily::from($resourceAttributes['item_family']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'item_family' => $this->item_family->toArray(),
        ]);
        

        return $data;
    }
}
?>