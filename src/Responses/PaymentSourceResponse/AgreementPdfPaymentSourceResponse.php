<?php

namespace Chargebee\Responses\PaymentSourceResponse;
use Chargebee\Resources\Download\Download;

use Chargebee\ValueObjects\ResponseBase;

class AgreementPdfPaymentSourceResponse extends ResponseBase { 
    /**
    *
    * @var ?Download $download
    */
    public ?Download $download;
    

    private function __construct(
        ?Download $download,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->download = $download;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['download']) ? Download::from($resourceAttributes['download']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->download instanceof Download){
            $data['download'] = $this->download->toArray();
        } 

        return $data;
    }
}
?>