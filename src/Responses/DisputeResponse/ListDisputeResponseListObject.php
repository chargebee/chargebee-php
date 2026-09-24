<?php
namespace Chargebee\Responses\DisputeResponse;

use Chargebee\Resources\Dispute\Dispute;

class ListDisputeResponseListObject
{ 
    public Dispute $dispute;
    public function __construct(
        Dispute $dispute,
    ) { 
        $this->dispute = $dispute;
    }
}
