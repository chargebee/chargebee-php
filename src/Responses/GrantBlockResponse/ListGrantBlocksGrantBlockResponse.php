<?php

namespace Chargebee\Responses\GrantBlockResponse;
use Chargebee\Resources\GrantBlock\GrantBlock;

use Chargebee\ValueObjects\ResponseBase;

class ListGrantBlocksGrantBlockResponse extends ResponseBase { 
    /**
    *
    * @var array<ListGrantBlocksGrantBlockResponseListObject> $list
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
            $list = array_map(function (array $result): ListGrantBlocksGrantBlockResponseListObject {
                return new ListGrantBlocksGrantBlockResponseListObject(
                    isset($result['grant_block']) ? GrantBlock::from($result['grant_block']) : null,
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
?>