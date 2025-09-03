<?php
namespace Chargebee\Responses\PlanResponse;

use Chargebee\Resources\Plan\Plan;

class ListPlanResponseListObject
{ 
    public Plan $plan;
    public function __construct(
        Plan $plan,
    ) { 
        $this->plan = $plan;
    }
}
