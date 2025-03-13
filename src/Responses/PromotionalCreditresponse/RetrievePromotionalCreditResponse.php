<?php

namespace Chargebee\Responses\PromotionalCreditResponse;
use Chargebee\Resources\PromotionalCredit\PromotionalCredit;

use Chargebee\ValueObjects\ResponseBase;

class RetrievePromotionalCreditResponse extends ResponseBase { 
    /**
    *
    * @var PromotionalCredit $promotional_credit
    */
    public PromotionalCredit $promotional_credit;
    

    private function __construct(
        PromotionalCredit $promotional_credit,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->promotional_credit = $promotional_credit;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             PromotionalCredit::from($resourceAttributes['promotional_credit']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'promotional_credit' => $this->promotional_credit->toArray(),
        ]);
        

        return $data;
    }
}
?>