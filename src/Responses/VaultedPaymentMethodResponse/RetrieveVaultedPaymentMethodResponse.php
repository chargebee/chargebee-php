<?php

namespace Chargebee\Responses\VaultedPaymentMethodResponse;
use Chargebee\Resources\VaultedPaymentMethod\VaultedPaymentMethod;

use Chargebee\ValueObjects\ResponseBase;

class RetrieveVaultedPaymentMethodResponse extends ResponseBase { 
    /**
    *
    * @var ?VaultedPaymentMethod $vaulted_payment_method
    */
    public ?VaultedPaymentMethod $vaulted_payment_method;
    

    private function __construct(
        ?VaultedPaymentMethod $vaulted_payment_method,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->vaulted_payment_method = $vaulted_payment_method;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['vaulted_payment_method']) ? VaultedPaymentMethod::from($resourceAttributes['vaulted_payment_method']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->vaulted_payment_method instanceof VaultedPaymentMethod){
            $data['vaulted_payment_method'] = $this->vaulted_payment_method->toArray();
        } 

        return $data;
    }
}
?>