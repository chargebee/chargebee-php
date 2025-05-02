<?php

namespace Chargebee\Responses\AddressResponse;
use Chargebee\Resources\Address\Address;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveAddressResponse extends ResponseBase { 
    /**
    *
    * @var ?Address $address
    */
    public ?Address $address;
    

    private function __construct(
        ?Address $address,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->address = $address;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['address']) ? Address::from($resourceAttributes['address']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->address instanceof Address){
            $data['address'] = $this->address->toArray();
        } 

        return $data;
    }
}
?>