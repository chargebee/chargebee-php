<?php
namespace Chargebee\Responses\UsageChargeResponse;

use Chargebee\Resources\UsageCharge\UsageCharge;

class RetrieveUsageChargesForSubscriptionUsageChargeResponseListObject
{ 
    public UsageCharge $usage_charge;
    public function __construct(
        UsageCharge $usage_charge,
    ) { 
        $this->usage_charge = $usage_charge;
    }
}
