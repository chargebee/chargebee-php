<?php

namespace Chargebee\Responses\VirtualBankAccountResponse;
use Chargebee\Resources\VirtualBankAccount\VirtualBankAccount;

use Chargebee\ValueObjects\ResponseBase;

class ListVirtualBankAccountResponse extends ResponseBase { 
    /**
    *
    * @var array<ListVirtualBankAccountResponseListObject> $list
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
            $list = array_map(function (array $result): ListVirtualBankAccountResponseListObject {
                return new ListVirtualBankAccountResponseListObject(
                    isset($result['virtual_bank_account']) ? VirtualBankAccount::from($result['virtual_bank_account']) : null,
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