<?php

namespace Chargebee\Responses\OmnichannelSubscriptionItemResponse;
use Chargebee\Resources\OmnichannelSubscriptionItemScheduledChange\OmnichannelSubscriptionItemScheduledChange;

use Chargebee\ValueObjects\ResponseBase;

class ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponse extends ResponseBase { 
    /**
    *
    * @var array<ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponseListObject> $list
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
            $list = array_map(function (array $result): ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponseListObject {
                return new ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponseListObject(
                    isset($result['omnichannel_subscription_item_scheduled_change']) ? OmnichannelSubscriptionItemScheduledChange::from($result['omnichannel_subscription_item_scheduled_change']) : null,
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


class ListOmniSubItemScheduleChangesOmnichannelSubscriptionItemResponseListObject {
    
        public OmnichannelSubscriptionItemScheduledChange $omnichannel_subscription_item_scheduled_change;
    
public function __construct(
    OmnichannelSubscriptionItemScheduledChange $omnichannel_subscription_item_scheduled_change,
){ 
    $this->omnichannel_subscription_item_scheduled_change = $omnichannel_subscription_item_scheduled_change;

}
}

?>