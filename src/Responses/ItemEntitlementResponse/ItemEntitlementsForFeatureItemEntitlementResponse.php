<?php

namespace Chargebee\Responses\ItemEntitlementResponse;
use Chargebee\Resources\ItemEntitlement\ItemEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class ItemEntitlementsForFeatureItemEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var array<ItemEntitlementsForFeatureItemEntitlementResponseListObject> $list
    */
    public array $list;
    
    /**
    *
    * @var ?string $next_offset
    */
    public ?string $next_offset;
    

    private function __construct(
        array $list,
        ?string $next_offset,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ItemEntitlementsForFeatureItemEntitlementResponseListObject {
                return new ItemEntitlementsForFeatureItemEntitlementResponseListObject(
                    isset($result['item_entitlement']) ? ItemEntitlement::from($result['item_entitlement']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'list' => $this->list,
            'next_offset' => $this->next_offset,
        ]);
        return $data;
    }
}


class ItemEntitlementsForFeatureItemEntitlementResponseListObject {
    
        public ItemEntitlement $item_entitlement;
    
public function __construct(
    ItemEntitlement $item_entitlement,
){ 
    $this->item_entitlement = $item_entitlement;

}
}

?>