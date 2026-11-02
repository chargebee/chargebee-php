<?php
namespace Chargebee\Responses\DraftRequestResponse;

use Chargebee\Resources\Citation\Citation;

class ListCitationsDraftRequestResponseListObject
{ 
    public Citation $citation;
    public function __construct(
        Citation $citation,
    ) { 
        $this->citation = $citation;
    }
}
