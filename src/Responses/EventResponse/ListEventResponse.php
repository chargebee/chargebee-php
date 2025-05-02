<?php

namespace Chargebee\Responses\EventResponse;
use Chargebee\Resources\Event\Event;

use Chargebee\ValueObjects\ResponseBase;

class ListEventResponse extends ResponseBase { 
    /**
    *
    * @var array<ListEventResponseListObject> $list
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
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->list = $list;
        $this->next_offset = $next_offset;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
            $list = array_map(function (array $result): ListEventResponseListObject {
                return new ListEventResponseListObject(
                    isset($result['event']) ? Event::from($result['event']) : null,
                );}, $resourceAttributes['list'] ?? []);
        
        return new self($list,
            $resourceAttributes['next_offset'] ?? null, $headers, $resourceAttributes);
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


class ListEventResponseListObject {
    
        public Event $event;
    
public function __construct(
    Event $event,
){ 
    $this->event = $event;

}
}

?>