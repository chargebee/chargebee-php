<?php

namespace Chargebee\Responses\OmnichannelSubscriptionResponse;
use Chargebee\Resources\OmnichannelSubscription\OmnichannelSubscription;

use Chargebee\ValueObjects\ResponseBase;

class ListOmnichannelSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var array<ListOmnichannelSubscriptionResponseListObject> $list
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
            $list = array_map(function (array $result): ListOmnichannelSubscriptionResponseListObject {
                return new ListOmnichannelSubscriptionResponseListObject(
                    isset($result['omnichannel_subscription']) ? OmnichannelSubscription::from($result['omnichannel_subscription']) : null,
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


class ListOmnichannelSubscriptionResponseListObject {
    
        public OmnichannelSubscription $omnichannel_subscription;
    
public function __construct(
    OmnichannelSubscription $omnichannel_subscription,
){ 
    $this->omnichannel_subscription = $omnichannel_subscription;

}
}

?>