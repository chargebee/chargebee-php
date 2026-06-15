<?php
namespace Chargebee\Responses\GrantBlockResponse;

use Chargebee\Resources\GrantBlock\GrantBlock;

class ListGrantBlocksGrantBlockResponseListObject
{ 
    public GrantBlock $grant_block;
    public function __construct(
        GrantBlock $grant_block,
    ) { 
        $this->grant_block = $grant_block;
    }
}
