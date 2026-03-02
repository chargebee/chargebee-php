<?php

namespace Chargebee\Responses\ItemEntitlementResponse;
use Chargebee\Resources\ItemEntitlement\ItemEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var array<UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponseListObject> $list
    */
    public array $list;
    

    private function __construct(
        array $list,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponseListObject {
                return new UpsertOrRemoveItemEntitlementsForItemItemEntitlementResponseListObject(
                    isset($result['item_entitlement']) ? ItemEntitlement::from($result['item_entitlement']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
        ]);
        return $data;
    }
}
?>