<?php

namespace Chargebee\Responses\CreditUnitResponse;
use Chargebee\Resources\CreditUnit\CreditUnit;

use Chargebee\ValueObjects\ResponseBase;

class ReactivateCreditUnitResponse extends ResponseBase { 
    /**
    *
    * @var ?CreditUnit $credit_unit
    */
    public ?CreditUnit $credit_unit;
    

    private function __construct(
        ?CreditUnit $credit_unit,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->credit_unit = $credit_unit;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['credit_unit']) ? CreditUnit::from($resourceAttributes['credit_unit']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->credit_unit instanceof CreditUnit){
            $data['credit_unit'] = $this->credit_unit->toArray();
        } 

        return $data;
    }
}
?>