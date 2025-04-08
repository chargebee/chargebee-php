<?php

namespace Chargebee\Responses\ItemEntitlementResponse;
use Chargebee\Resources\ItemEntitlement\ItemEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var ItemEntitlement $item_entitlement
    */
    public ItemEntitlement $item_entitlement;
    

    private function __construct(
        ItemEntitlement $item_entitlement,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->item_entitlement = $item_entitlement;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             ItemEntitlement::from($resourceAttributes['item_entitlement']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'item_entitlement' => $this->item_entitlement->toArray(),
        ]);
        

        return $data;
    }
}
?>