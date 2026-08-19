<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\VaultedPaymentMethodResponse\RetrieveVaultedPaymentMethodResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface VaultedPaymentMethodActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/vaulted_payment_methods/retrieve-vaulted-payment-method?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveVaultedPaymentMethodResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveVaultedPaymentMethodResponse;

}
?>