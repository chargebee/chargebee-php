<?php

namespace Chargebee\Responses\ExportResponse;
use Chargebee\Resources\Export\Export;

use Chargebee\ValueObjects\ResponseBase;

class DifferentialPricesExportResponse extends ResponseBase { 
    /**
    *
    * @var Export $export
    */
    public Export $export;
    

    private function __construct(
        Export $export,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->export = $export;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Export::from($resourceAttributes['export']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'export' => $this->export->toArray(),
        ]);
        

        return $data;
    }
}
?>