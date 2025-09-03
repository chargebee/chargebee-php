<?php
namespace Chargebee\Responses\EventResponse;

use Chargebee\Resources\Event\Event;

class ListEventResponseListObject
{ 
    public Event $event;
    public function __construct(
        Event $event,
    ) { 
        $this->event = $event;
    }
}
