<?php
namespace Chargebee\Responses\FeatureResponse;

use Chargebee\Resources\Feature\Feature;

class ListFeatureResponseListObject
{ 
    public Feature $feature;
    public function __construct(
        Feature $feature,
    ) { 
        $this->feature = $feature;
    }
}
