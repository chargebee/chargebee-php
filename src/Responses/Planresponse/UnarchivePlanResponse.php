<?php

namespace Chargebee\Responses\PlanResponse;
use Chargebee\Resources\Plan\Plan;

use Chargebee\ValueObjects\ResponseBase;

class UnarchivePlanResponse extends ResponseBase { 
    /**
    *
    * @var Plan $plan
    */
    public Plan $plan;
    

    private function __construct(
        Plan $plan,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->plan = $plan;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Plan::from($resourceAttributes['plan']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'plan' => $this->plan->toArray(),
        ]);
        

        return $data;
    }
}
?>