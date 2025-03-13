<?php

namespace Chargebee\Responses\AttachedItemResponse;
use Chargebee\Resources\AttachedItem\AttachedItem;

use Chargebee\ValueObjects\ResponseBase;

class ListAttachedItemResponse extends ResponseBase { 
    /**
    *
    * @var array<ListAttachedItemResponseListObject> $list
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
            $list = array_map(function (array $result): ListAttachedItemResponseListObject {
                return new ListAttachedItemResponseListObject(
                    isset($result['attached_item']) ? AttachedItem::from($result['attached_item']) : null,
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


class ListAttachedItemResponseListObject {
    
        public AttachedItem $attached_item;
    
public function __construct(
    AttachedItem $attached_item,
){ 
    $this->attached_item = $attached_item;

}
}

?>