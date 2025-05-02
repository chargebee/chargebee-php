<?php

namespace Chargebee\Responses\HostedPageResponse;

use Chargebee\ValueObjects\ResponseBase;

class EventsHostedPageResponse extends ResponseBase { 
    /**
    *
    * @var ?bool $success
    */
    public ?bool $success;
    

    private function __construct(
        ?bool $success,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->success = $success;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            $resourceAttributes['success'] ?? null, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([
            'success' => $this->success,
        ]);
          

        return $data;
    }
}
?>