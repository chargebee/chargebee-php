<?php
namespace Chargebee\Responses\PromotionalCreditResponse;

use Chargebee\Resources\PromotionalCredit\PromotionalCredit;

class ListPromotionalCreditResponseListObject
{ 
    public PromotionalCredit $promotional_credit;
    public function __construct(
        PromotionalCredit $promotional_credit,
    ) { 
        $this->promotional_credit = $promotional_credit;
    }
}
