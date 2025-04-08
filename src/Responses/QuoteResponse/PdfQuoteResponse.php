<?php

namespace Chargebee\Responses\QuoteResponse;
use Chargebee\Resources\Download\Download;

use Chargebee\ValueObjects\ResponseBase;

class PdfQuoteResponse extends ResponseBase { 
    /**
    *
    * @var Download $download
    */
    public Download $download;
    

    private function __construct(
        Download $download,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->download = $download;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Download::from($resourceAttributes['download']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'download' => $this->download->toArray(),
        ]);
        

        return $data;
    }
}
?>