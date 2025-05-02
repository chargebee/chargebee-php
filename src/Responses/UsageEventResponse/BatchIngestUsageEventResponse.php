<?php

namespace Chargebee\Responses\UsageEventResponse;

use Chargebee\ValueObjects\ResponseBase;

class BatchIngestUsageEventResponse extends ResponseBase { 
    /**
    *
    * @var ?string $batch_id
    */
    public ?string $batch_id;
    
    /**
    *
    * @var mixed $failed_events
    */
    public mixed $failed_events;
    

    private function __construct(
        ?string $batch_id,
        mixed $failed_events,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->batch_id = $batch_id;
        $this->failed_events = $failed_events;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            $resourceAttributes['batch_id'] ?? null,
            $resourceAttributes['failed_events'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'batch_id' => $this->batch_id,
            'failed_events' => $this->failed_events,
        ]);
            

        return $data;
    }
}
?>