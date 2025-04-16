<?php

namespace Chargebee\Responses\SubscriptionEntitlementResponse;
use Chargebee\Resources\SubscriptionEntitlement\SubscriptionEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var array<SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponseListObject> $list
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
            $list = array_map(function (array $result): SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponseListObject {
                return new SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponseListObject(
                    isset($result['subscription_entitlement']) ? SubscriptionEntitlement::from($result['subscription_entitlement']) : null,
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


class SubscriptionEntitlementsForSubscriptionSubscriptionEntitlementResponseListObject {
    
        public SubscriptionEntitlement $subscription_entitlement;
    
public function __construct(
    SubscriptionEntitlement $subscription_entitlement,
){ 
    $this->subscription_entitlement = $subscription_entitlement;

}
}

?>