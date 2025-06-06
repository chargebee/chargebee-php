<?php

namespace Chargebee\Responses\PromotionalCreditResponse;
use Chargebee\Resources\PromotionalCredit\PromotionalCredit;

use Chargebee\ValueObjects\ResponseBase;

class ListPromotionalCreditResponse extends ResponseBase { 
    /**
    *
    * @var array<ListPromotionalCreditResponseListObject> $list
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
            $list = array_map(function (array $result): ListPromotionalCreditResponseListObject {
                return new ListPromotionalCreditResponseListObject(
                    isset($result['promotional_credit']) ? PromotionalCredit::from($result['promotional_credit']) : null,
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


class ListPromotionalCreditResponseListObject {
    
        public PromotionalCredit $promotional_credit;
    
public function __construct(
    PromotionalCredit $promotional_credit,
){ 
    $this->promotional_credit = $promotional_credit;

}
}

?>