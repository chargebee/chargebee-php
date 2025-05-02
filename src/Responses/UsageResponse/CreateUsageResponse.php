<?php

namespace Chargebee\Responses\UsageResponse;
use Chargebee\Resources\Usage\Usage;

use Chargebee\ValueObjects\ResponseBase;

class CreateUsageResponse extends ResponseBase { 
    /**
    *
    * @var ?Usage $usage
    */
    public ?Usage $usage;
    

    private function __construct(
        ?Usage $usage,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->usage = $usage;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['usage']) ? Usage::from($resourceAttributes['usage']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->usage instanceof Usage){
            $data['usage'] = $this->usage->toArray();
        } 

        return $data;
    }
}
?>