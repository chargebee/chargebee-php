<?php

namespace Chargebee\Responses\ExportResponse;
use Chargebee\Resources\Export\Export;

use Chargebee\ValueObjects\ResponseBase;

class PlansExportResponse extends ResponseBase { 
    /**
    *
    * @var ?Export $export
    */
    public ?Export $export;
    

    private function __construct(
        ?Export $export,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->export = $export;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['export']) ? Export::from($resourceAttributes['export']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->export instanceof Export){
            $data['export'] = $this->export->toArray();
        } 

        return $data;
    }
}
?>