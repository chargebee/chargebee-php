<?php
namespace Chargebee\Responses\UnbilledChargeResponse;

use Chargebee\Resources\UnbilledCharge\UnbilledCharge;

class ListUnbilledChargeResponseListObject
{ 
    public UnbilledCharge $unbilled_charge;
    public function __construct(
        UnbilledCharge $unbilled_charge,
    ) { 
        $this->unbilled_charge = $unbilled_charge;
    }
}
