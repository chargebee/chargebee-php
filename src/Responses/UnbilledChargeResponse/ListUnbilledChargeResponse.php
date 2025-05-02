<?php

namespace Chargebee\Responses\UnbilledChargeResponse;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;

use Chargebee\ValueObjects\ResponseBase;

class ListUnbilledChargeResponse extends ResponseBase { 
    /**
    *
    * @var array<ListUnbilledChargeResponseListObject> $list
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
            $list = array_map(function (array $result): ListUnbilledChargeResponseListObject {
                return new ListUnbilledChargeResponseListObject(
                    isset($result['unbilled_charge']) ? UnbilledCharge::from($result['unbilled_charge']) : null,
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


class ListUnbilledChargeResponseListObject {
    
        public UnbilledCharge $unbilled_charge;
    
public function __construct(
    UnbilledCharge $unbilled_charge,
){ 
    $this->unbilled_charge = $unbilled_charge;

}
}

?>