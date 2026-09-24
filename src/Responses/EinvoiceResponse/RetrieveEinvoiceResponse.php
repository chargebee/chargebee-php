<?php

namespace Chargebee\Responses\EinvoiceResponse;
use Chargebee\Resources\Einvoice\Einvoice;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveEinvoiceResponse extends ResponseBase { 
    /**
    *
    * @var ?Einvoice $einvoice
    */
    public ?Einvoice $einvoice;
    

    private function __construct(
        ?Einvoice $einvoice,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->einvoice = $einvoice;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['einvoice']) ? Einvoice::from($resourceAttributes['einvoice']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->einvoice instanceof Einvoice){
            $data['einvoice'] = $this->einvoice->toArray();
        } 

        return $data;
    }
}
?>