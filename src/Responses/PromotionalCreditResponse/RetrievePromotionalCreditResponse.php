<?php

namespace Chargebee\Responses\PromotionalCreditResponse;
use Chargebee\Resources\PromotionalCredit\PromotionalCredit;

use Chargebee\ValueObjects\ResponseBase;

class RetrievePromotionalCreditResponse extends ResponseBase { 
    /**
    *
    * @var ?PromotionalCredit $promotional_credit
    */
    public ?PromotionalCredit $promotional_credit;
    

    private function __construct(
        ?PromotionalCredit $promotional_credit,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->promotional_credit = $promotional_credit;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['promotional_credit']) ? PromotionalCredit::from($resourceAttributes['promotional_credit']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->promotional_credit instanceof PromotionalCredit){
            $data['promotional_credit'] = $this->promotional_credit->toArray();
        } 

        return $data;
    }
}
?>