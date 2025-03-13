<?php

namespace Chargebee\Responses\UsageEventResponse;
use Chargebee\Resources\UsageEvent\UsageEvent;

use Chargebee\ValueObjects\ResponseBase;

class CreateUsageEventResponse extends ResponseBase { 
    /**
    *
    * @var UsageEvent $usage_event
    */
    public UsageEvent $usage_event;
    

    private function __construct(
        UsageEvent $usage_event,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->usage_event = $usage_event;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             UsageEvent::from($resourceAttributes['usage_event']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'usage_event' => $this->usage_event->toArray(),
        ]);
        

        return $data;
    }
}
?>