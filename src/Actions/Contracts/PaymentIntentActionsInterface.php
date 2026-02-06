<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PaymentIntentResponse\UpdatePaymentIntentResponse;
use Chargebee\Responses\PaymentIntentResponse\RetrievePaymentIntentResponse;
use Chargebee\Responses\PaymentIntentResponse\CreatePaymentIntentResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PaymentIntentActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents/retrieve-a-payment-intent?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentIntentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentIntentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents/update-a-payment-intent?lang=php-v4
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePaymentIntentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdatePaymentIntentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents/create-a-payment-intent?lang=php-v4
    *   @param array{
    *     business_entity_id?: string,
    *     customer_id?: string,
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentIntentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreatePaymentIntentResponse;

}
?>