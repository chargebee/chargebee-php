<?php
namespace Chargebee\Responses\CustomerResponse;

use Chargebee\Resources\Hierarchy\Hierarchy;

class ListHierarchyDetailCustomerResponseListObject
{ 
    public Hierarchy $hierarchy;
    public function __construct(
        Hierarchy $hierarchy,
    ) { 
        $this->hierarchy = $hierarchy;
    }
}
