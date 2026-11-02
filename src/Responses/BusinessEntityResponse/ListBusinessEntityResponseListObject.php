<?php
namespace Chargebee\Responses\BusinessEntityResponse;

use Chargebee\Resources\BusinessEntity\BusinessEntity;

class ListBusinessEntityResponseListObject
{ 
    public BusinessEntity $business_entity;
    public function __construct(
        BusinessEntity $business_entity,
    ) { 
        $this->business_entity = $business_entity;
    }
}
