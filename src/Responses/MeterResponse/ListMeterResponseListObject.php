<?php
namespace Chargebee\Responses\MeterResponse;

use Chargebee\Resources\Meter\Meter;

class ListMeterResponseListObject
{ 
    public Meter $meter;
    public function __construct(
        Meter $meter,
    ) { 
        $this->meter = $meter;
    }
}
