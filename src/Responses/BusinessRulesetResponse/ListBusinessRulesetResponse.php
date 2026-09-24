<?php

namespace Chargebee\Responses\BusinessRulesetResponse;
use Chargebee\Resources\BusinessRuleset\BusinessRuleset;

use Chargebee\ValueObjects\ResponseBase;

class ListBusinessRulesetResponse extends ResponseBase { 
    /**
    *
    * @var array<ListBusinessRulesetResponseListObject> $list
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
            $list = array_map(function (array $result): ListBusinessRulesetResponseListObject {
                return new ListBusinessRulesetResponseListObject(
                    isset($result['business_ruleset']) ? BusinessRuleset::from($result['business_ruleset']) : null,
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