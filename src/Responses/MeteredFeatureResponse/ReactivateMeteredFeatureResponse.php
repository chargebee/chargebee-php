<?php

namespace Chargebee\Responses\MeteredFeatureResponse;
use Chargebee\Resources\Meter\Meter;

use Chargebee\ValueObjects\ResponseBase;

class ReactivateMeteredFeatureResponse extends ResponseBase { 
    /**
    *
    * @var ?Meter $meter
    */
    public ?Meter $meter;
    

    private function __construct(
        ?Meter $meter,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->meter = $meter;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['meter']) ? Meter::from($resourceAttributes['meter']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->meter instanceof Meter){
            $data['meter'] = $this->meter->toArray();
        } 

        return $data;
    }
}
?>