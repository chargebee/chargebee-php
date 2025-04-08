<?php

namespace Chargebee\Responses\EventResponse;
use Chargebee\Resources\Event\Event;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveEventResponse extends ResponseBase { 
    /**
    *
    * @var Event $event
    */
    public Event $event;
    

    private function __construct(
        Event $event,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->event = $event;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Event::from($resourceAttributes['event']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'event' => $this->event->toArray(),
        ]);
        

        return $data;
    }
}
?>