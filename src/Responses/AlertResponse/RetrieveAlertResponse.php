<?php

namespace Chargebee\Responses\AlertResponse;
use Chargebee\Resources\Alert\Alert;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveAlertResponse extends ResponseBase { 
    /**
    *
    * @var ?Alert $alert
    */
    public ?Alert $alert;
    

    private function __construct(
        ?Alert $alert,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->alert = $alert;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['alert']) ? Alert::from($resourceAttributes['alert']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->alert instanceof Alert){
            $data['alert'] = $this->alert->toArray();
        } 

        return $data;
    }
}
?>