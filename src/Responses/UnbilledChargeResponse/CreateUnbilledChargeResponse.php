<?php

namespace Chargebee\Responses\UnbilledChargeResponse;
use Chargebee\Resources\UnbilledCharge\UnbilledCharge;

use Chargebee\ValueObjects\ResponseBase;

class CreateUnbilledChargeResponse extends ResponseBase { 
    /**
    *
    * @var ?array<UnbilledCharge> $unbilled_charges
    */
    public ?array $unbilled_charges;
    

    private function __construct(
        ?array $unbilled_charges,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->unbilled_charges = $unbilled_charges;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $unbilled_charges = array_map(fn (array $result): UnbilledCharge =>  UnbilledCharge::from(
            $result
        ), $resourceAttributes['unbilled_charges'] ?? []);
        
        return new self($unbilled_charges, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

        if($this->unbilled_charges !== []) {
            $data['unbilled_charges'] = array_map(
                fn (UnbilledCharge $unbilled_charges): array => $unbilled_charges->toArray(),
                $this->unbilled_charges
            );
        }
        return $data;
    }
}
?>