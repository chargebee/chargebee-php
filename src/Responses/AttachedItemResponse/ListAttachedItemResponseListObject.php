<?php
namespace Chargebee\Responses\AttachedItemResponse;

use Chargebee\Resources\AttachedItem\AttachedItem;

class ListAttachedItemResponseListObject
{ 
    public AttachedItem $attached_item;
    public function __construct(
        AttachedItem $attached_item,
    ) { 
        $this->attached_item = $attached_item;
    }
}
