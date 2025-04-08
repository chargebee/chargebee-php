<?php

namespace Chargebee\Responses\OmnichannelSubscriptionResponse;
use Chargebee\Resources\OmnichannelTransaction\OmnichannelTransaction;

use Chargebee\ValueObjects\ResponseBase;

class OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponse extends ResponseBase { 
    /**
    *
    * @var array<OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponseListObject> $list
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
            $list = array_map(function (array $result): OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponseListObject {
                return new OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponseListObject(
                    isset($result['omnichannel_transaction']) ? OmnichannelTransaction::from($result['omnichannel_transaction']) : null,
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


class OmnichannelTransactionsForOmnichannelSubscriptionOmnichannelSubscriptionResponseListObject {
    
        public OmnichannelTransaction $omnichannel_transaction;
    
public function __construct(
    OmnichannelTransaction $omnichannel_transaction,
){ 
    $this->omnichannel_transaction = $omnichannel_transaction;

}
}

?>