<?php

namespace Chargebee\Responses\PlanResponse;
use Chargebee\Resources\Plan\Plan;

use Chargebee\ValueObjects\ResponseBase;

class UpdatePlanResponse extends ResponseBase { 
    /**
    *
    * @var ?Plan $plan
    */
    public ?Plan $plan;
    

    private function __construct(
        ?Plan $plan,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->plan = $plan;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['plan']) ? Plan::from($resourceAttributes['plan']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->plan instanceof Plan){
            $data['plan'] = $this->plan->toArray();
        } 

        return $data;
    }
}
?>