<?php

namespace Chargebee\Responses\ItemPriceResponse;
use Chargebee\Resources\ItemPrice\ItemPrice;

use Chargebee\ValueObjects\ResponseBase;

class FindApplicableItemPricesItemPriceResponse extends ResponseBase { 
    /**
    *
    * @var array<FindApplicableItemPricesItemPriceResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): FindApplicableItemPricesItemPriceResponseListObject {
                return new FindApplicableItemPricesItemPriceResponseListObject(
                    isset($result['item_price']) ? ItemPrice::from($result['item_price']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class FindApplicableItemPricesItemPriceResponseListObject {
    
        public ItemPrice $item_price;
    
public function __construct(
    ItemPrice $item_price,
){ 
    $this->item_price = $item_price;

}
}

?>