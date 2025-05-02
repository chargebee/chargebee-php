<?php

namespace Chargebee\Responses\UsageEventResponse;
use Chargebee\Resources\UsageEvent\UsageEvent;

use Chargebee\ValueObjects\ResponseBase;

class CreateUsageEventResponse extends ResponseBase { 
    /**
    *
    * @var ?UsageEvent $usage_event
    */
    public ?UsageEvent $usage_event;
    

    private function __construct(
        ?UsageEvent $usage_event,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->usage_event = $usage_event;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['usage_event']) ? UsageEvent::from($resourceAttributes['usage_event']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->usage_event instanceof UsageEvent){
            $data['usage_event'] = $this->usage_event->toArray();
        } 

        return $data;
    }
}
?>