<?php

namespace Chargebee\Responses\SubscriptionResponse;
use Chargebee\Resources\ContractTerm\ContractTerm;

use Chargebee\ValueObjects\ResponseBase;

class ContractTermsForSubscriptionSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var array<ContractTermsForSubscriptionSubscriptionResponseListObject> $list
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
            $list = array_map(function (array $result): ContractTermsForSubscriptionSubscriptionResponseListObject {
                return new ContractTermsForSubscriptionSubscriptionResponseListObject(
                    isset($result['contract_term']) ? ContractTerm::from($result['contract_term']) : null,
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


class ContractTermsForSubscriptionSubscriptionResponseListObject {
    
        public ContractTerm $contract_term;
    
public function __construct(
    ContractTerm $contract_term,
){ 
    $this->contract_term = $contract_term;

}
}

?>