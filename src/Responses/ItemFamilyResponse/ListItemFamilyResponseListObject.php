<?php
namespace Chargebee\Responses\ItemFamilyResponse;

use Chargebee\Resources\ItemFamily\ItemFamily;

class ListItemFamilyResponseListObject
{ 
    public ItemFamily $item_family;
    public function __construct(
        ItemFamily $item_family,
    ) { 
        $this->item_family = $item_family;
    }
}
