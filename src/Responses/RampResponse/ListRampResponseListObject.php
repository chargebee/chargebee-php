<?php
namespace Chargebee\Responses\RampResponse;

use Chargebee\Resources\Ramp\Ramp;

class ListRampResponseListObject
{ 
    public Ramp $ramp;
    public function __construct(
        Ramp $ramp,
    ) { 
        $this->ramp = $ramp;
    }
}
