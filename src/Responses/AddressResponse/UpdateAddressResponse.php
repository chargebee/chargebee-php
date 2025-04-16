<?php

namespace Chargebee\Responses\AddressResponse;
use Chargebee\Resources\Address\Address;

use Chargebee\ValueObjects\ResponseBase;

class UpdateAddressResponse extends ResponseBase { 
    /**
    *
    * @var Address $address
    */
    public Address $address;
    

    private function __construct(
        Address $address,
        array $responseHeaders=[],
    )
    {
        parent::__construct($responseHeaders);
        $this->address = $address;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
             Address::from($resourceAttributes['address']), $headers);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
            'address' => $this->address->toArray(),
        ]);
        

        return $data;
    }
}
?>