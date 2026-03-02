<?php
namespace Chargebee\Responses\UsageSummaryResponse;

use Chargebee\Resources\UsageSummary\UsageSummary;

class RetrieveUsageSummaryForSubscriptionUsageSummaryResponseListObject
{ 
    public UsageSummary $usage_summary;
    public function __construct(
        UsageSummary $usage_summary,
    ) { 
        $this->usage_summary = $usage_summary;
    }
}
