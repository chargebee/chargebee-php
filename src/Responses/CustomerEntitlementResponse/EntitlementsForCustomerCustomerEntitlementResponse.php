<?php

namespace Chargebee\Responses\CustomerEntitlementResponse;
use Chargebee\Resources\CustomerEntitlement\CustomerEntitlement;
use Chargebee\ValueObjects\ResponseBase;

class EntitlementsForCustomerCustomerEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var array<EntitlementsForCustomerCustomerEntitlementResponseListObject> $list
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
            $list = array_map(function (array $result): EntitlementsForCustomerCustomerEntitlementResponseListObject {
                return new EntitlementsForCustomerCustomerEntitlementResponseListObject(
                    isset($result['customer_entitlement']) ? CustomerEntitlement::from($result['customer_entitlement']) : null,
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
?>