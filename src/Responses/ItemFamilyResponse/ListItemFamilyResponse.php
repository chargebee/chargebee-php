<?php

namespace Chargebee\Responses\ItemFamilyResponse;
use Chargebee\Resources\ItemFamily\ItemFamily;

use Chargebee\ValueObjects\ResponseBase;

class ListItemFamilyResponse extends ResponseBase { 
    /**
    *
    * @var array<ListItemFamilyResponseListObject> $list
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
            $list = array_map(function (array $result): ListItemFamilyResponseListObject {
                return new ListItemFamilyResponseListObject(
                    isset($result['item_family']) ? ItemFamily::from($result['item_family']) : null,
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


class ListItemFamilyResponseListObject {
    
        public ItemFamily $item_family;
    
public function __construct(
    ItemFamily $item_family,
){ 
    $this->item_family = $item_family;

}
}

?>