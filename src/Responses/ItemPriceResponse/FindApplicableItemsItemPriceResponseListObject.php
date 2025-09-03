<?php
namespace Chargebee\Responses\ItemPriceResponse;

use Chargebee\Resources\Item\Item;

class FindApplicableItemsItemPriceResponseListObject
{ 
    public Item $item;
    public function __construct(
        Item $item,
    ) { 
        $this->item = $item;
    }
}
