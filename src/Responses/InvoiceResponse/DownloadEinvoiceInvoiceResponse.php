<?php

namespace Chargebee\Responses\InvoiceResponse;
use Chargebee\Resources\Download\Download;

use Chargebee\ValueObjects\ResponseBase;

class DownloadEinvoiceInvoiceResponse extends ResponseBase { 
    /**
    *
    * @var ?array<Download> $downloads
    */
    public ?array $downloads;
    

    private function __construct(
        ?array $downloads,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->downloads = $downloads;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        $downloads = array_map(fn (array $result): Download =>  Download::from(
            $result
        ), $resourceAttributes['downloads'] ?? []);
        
        return new self($downloads, $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
          

        if($this->downloads !== []) {
            $data['downloads'] = array_map(
                fn (Download $downloads): array => $downloads->toArray(),
                $this->downloads
            );
        }
        return $data;
    }
}
?>