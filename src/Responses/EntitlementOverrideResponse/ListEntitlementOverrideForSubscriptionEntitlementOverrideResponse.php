<?php

namespace Chargebee\Responses\EntitlementOverrideResponse;
use Chargebee\Resources\EntitlementOverride\EntitlementOverride;

use Chargebee\ValueObjects\ResponseBase;

class ListEntitlementOverrideForSubscriptionEntitlementOverrideResponse extends ResponseBase { 
    /**
    *
    * @var array<ListEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject> $list
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
    )
    {
        parent::__construct($responseHeaders);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject {
                return new ListEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject(
                    isset($result['entitlement_override']) ? EntitlementOverride::from($result['entitlement_override']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers);
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


class ListEntitlementOverrideForSubscriptionEntitlementOverrideResponseListObject {
    
        public EntitlementOverride $entitlement_override;
    
public function __construct(
    EntitlementOverride $entitlement_override,
){ 
    $this->entitlement_override = $entitlement_override;

}
}

?>