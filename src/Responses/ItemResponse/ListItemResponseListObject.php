<?php
namespace Chargebee\Responses\ItemResponse;

use Chargebee\Resources\Item\Item;

class ListItemResponseListObject
{ 
    public Item $item;
    public function __construct(
        Item $item,
    ) { 
        $this->item = $item;
    }
}
