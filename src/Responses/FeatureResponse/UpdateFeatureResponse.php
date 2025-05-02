<?php

namespace Chargebee\Responses\FeatureResponse;
use Chargebee\Resources\Feature\Feature;

use Chargebee\ValueObjects\ResponseBase;

class UpdateFeatureResponse extends ResponseBase { 
    /**
    *
    * @var ?Feature $feature
    */
    public ?Feature $feature;
    

    private function __construct(
        ?Feature $feature,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->feature = $feature;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['feature']) ? Feature::from($resourceAttributes['feature']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->feature instanceof Feature){
            $data['feature'] = $this->feature->toArray();
        } 

        return $data;
    }
}
?>