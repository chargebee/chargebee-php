<?php

namespace Chargebee\Responses\LedgerAccountBalanceResponse;

use Chargebee\ValueObjects\ResponseBase;

class UpdateOverdraftLimitLedgerAccountBalanceResponse extends ResponseBase { 
    /**
    *
    * @var ?string $subscription_id
    */
    public ?string $subscription_id;
    
    /**
    *
    * @var ?string $unit_id
    */
    public ?string $unit_id;
    
    /**
    *
    * @var ?string $change_reason
    */
    public ?string $change_reason;
    
    /**
    *
    * @var mixed $overdraft_balance
    */
    public mixed $overdraft_balance;
    

    private function __construct(
        ?string $subscription_id,
        ?string $unit_id,
        ?string $change_reason,
        mixed $overdraft_balance,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->subscription_id = $subscription_id;
        $this->unit_id = $unit_id;
        $this->change_reason = $change_reason;
        $this->overdraft_balance = $overdraft_balance;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            $resourceAttributes['subscription_id'] ?? null,
            $resourceAttributes['unit_id'] ?? null,
            $resourceAttributes['change_reason'] ?? null,
            $resourceAttributes['overdraft_balance'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'subscription_id' => $this->subscription_id,
            'unit_id' => $this->unit_id,
            'change_reason' => $this->change_reason,
            'overdraft_balance' => $this->overdraft_balance,
        ]);
                

        return $data;
    }
}
?>