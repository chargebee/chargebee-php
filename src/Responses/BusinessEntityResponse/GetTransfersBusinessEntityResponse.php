<?php

namespace Chargebee\Responses\BusinessEntityResponse;
use Chargebee\Resources\BusinessEntityTransfer\BusinessEntityTransfer;
use Chargebee\ValueObjects\ResponseBase;

class GetTransfersBusinessEntityResponse extends ResponseBase { 
    /**
    *
    * @var array<GetTransfersBusinessEntityResponseListObject> $list
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
            $list = array_map(function (array $result): GetTransfersBusinessEntityResponseListObject {
                return new GetTransfersBusinessEntityResponseListObject(
                    isset($result['business_entity_transfer']) ? BusinessEntityTransfer::from($result['business_entity_transfer']) : null,
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