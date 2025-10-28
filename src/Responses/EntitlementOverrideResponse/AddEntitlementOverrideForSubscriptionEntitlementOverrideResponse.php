<?php

namespace Chargebee\Responses\EntitlementOverrideResponse;
use Chargebee\Resources\EntitlementOverride\EntitlementOverride;

use Chargebee\ValueObjects\ResponseBase;

class AddEntitlementOverrideForSubscriptionEntitlementOverrideResponse extends ResponseBase { 
    /**
    *
    * @var array<AddEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject> $list
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
            $list = array_map(function (array $result): AddEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject {
                return new AddEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject(
                    isset($result['entitlement_override']) ? EntitlementOverride::from($result['entitlement_override']) : null,
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