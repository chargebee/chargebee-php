<?php
namespace Chargebee\Responses\UsageResponse;

use Chargebee\Resources\Usage\Usage;

class ListUsageResponseListObject
{ 
    public Usage $usage;
    public function __construct(
        Usage $usage,
    ) { 
        $this->usage = $usage;
    }
}
