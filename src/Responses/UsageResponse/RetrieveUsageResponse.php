<?php

namespace Chargebee\Responses\UsageResponse;
use Chargebee\Resources\Usage\Usage;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveUsageResponse extends ResponseBase { 
    /**
    *
    * @var Usage $usage
    */
    public Usage $usage;
    

    private function __construct(
        Usage $usage,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->usage = $usage;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Usage::from($resourceAttributes['usage']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'usage' => $this->usage->toArray(),
        ]);
        

        return $data;
    }
}
?>