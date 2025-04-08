<?php

namespace Chargebee\Responses\FeatureResponse;
use Chargebee\Resources\Feature\Feature;

use Chargebee\ValueObjects\ResponseBase;

class ActivateFeatureResponse extends ResponseBase { 
    /**
    *
    * @var Feature $feature
    */
    public Feature $feature;
    

    private function __construct(
        Feature $feature,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->feature = $feature;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Feature::from($resourceAttributes['feature']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'feature' => $this->feature->toArray(),
        ]);
        

        return $data;
    }
}
?>