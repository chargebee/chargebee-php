<?php
namespace Chargebee\Responses\CreditUnitResponse;

use Chargebee\Resources\CreditUnit\CreditUnit;

class ListCreditUnitResponseListObject
{ 
    public CreditUnit $credit_unit;
    public function __construct(
        CreditUnit $credit_unit,
    ) { 
        $this->credit_unit = $credit_unit;
    }
}
