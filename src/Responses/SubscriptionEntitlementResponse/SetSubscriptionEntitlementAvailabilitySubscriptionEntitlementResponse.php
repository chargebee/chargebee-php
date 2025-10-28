<?php

namespace Chargebee\Responses\SubscriptionEntitlementResponse;
use Chargebee\Resources\SubscriptionEntitlement\SubscriptionEntitlement;

use Chargebee\ValueObjects\ResponseBase;

class SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponse extends ResponseBase { 
    /**
    *
    * @var array<SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponseListObject> $list
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
            $list = array_map(function (array $result): SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponseListObject {
                return new SetSubscriptionEntitlementAvailabilitySubscriptionEntitlementResponseListObject(
                    isset($result['subscription_entitlement']) ? SubscriptionEntitlement::from($result['subscription_entitlement']) : null,
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