<?php

namespace Chargebee\Responses\EventResponse;
use Chargebee\Resources\Event\Event;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveEventResponse extends ResponseBase { 
    /**
    *
    * @var ?Event $event
    */
    public ?Event $event;
    

    private function __construct(
        ?Event $event,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->event = $event;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['event']) ? Event::from($resourceAttributes['event']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->event instanceof Event){
            $data['event'] = $this->event->toArray();
        } 

        return $data;
    }
}
?>