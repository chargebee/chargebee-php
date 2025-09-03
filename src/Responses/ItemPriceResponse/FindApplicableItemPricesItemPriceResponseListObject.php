<?php
namespace Chargebee\Responses\ItemPriceResponse;

use Chargebee\Resources\ItemPrice\ItemPrice;

class FindApplicableItemPricesItemPriceResponseListObject
{ 
    public ItemPrice $item_price;
    public function __construct(
        ItemPrice $item_price,
    ) { 
        $this->item_price = $item_price;
    }
}
