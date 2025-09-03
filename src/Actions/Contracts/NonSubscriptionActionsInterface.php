<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\NonSubscriptionResponse\ProcessReceiptNonSubscriptionResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface NonSubscriptionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/non_subscriptions?lang=php#one_time_purchase
    *   @param array{
    *     product?: array{
    *     id?: string,
    *     currency_code?: string,
    *     price?: int,
    *     type?: string,
    *     name?: string,
    *     price_in_decimal?: string,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     },
    * receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ProcessReceiptNonSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function processReceipt(string $id, array $params, array $headers = []): ProcessReceiptNonSubscriptionResponse;

}
?>