<?php
namespace Chargebee\Responses\CustomerResponse;

use Chargebee\Resources\Hierarchy\Hierarchy;

class ListHierarchyDetailCustomerResponseListObject
{ 
    public Hierarchy $hierarchies;
    public function __construct(
        Hierarchy $hierarchies,
    ) { 
        $this->hierarchies = $hierarchies;
    }
}
