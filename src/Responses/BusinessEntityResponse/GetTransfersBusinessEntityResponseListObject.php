<?php
namespace Chargebee\Responses\BusinessEntityResponse;

use Chargebee\Resources\BusinessEntityTransfer\BusinessEntityTransfer;

class GetTransfersBusinessEntityResponseListObject
{ 
    public BusinessEntityTransfer $business_entity_transfer;
    public function __construct(
        BusinessEntityTransfer $business_entity_transfer,
    ) { 
        $this->business_entity_transfer = $business_entity_transfer;
    }
}
