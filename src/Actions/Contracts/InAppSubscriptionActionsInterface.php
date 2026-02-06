<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\InAppSubscriptionResponse\ImportSubscriptionInAppSubscriptionResponse;
use Chargebee\Responses\InAppSubscriptionResponse\RetrieveStoreSubsInAppSubscriptionResponse;
use Chargebee\Responses\InAppSubscriptionResponse\ProcessReceiptInAppSubscriptionResponse;
use Chargebee\Responses\InAppSubscriptionResponse\ImportReceiptInAppSubscriptionResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface InAppSubscriptionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions/retrieve-store-subscription?lang=php-v4
    *   @param array{
    *     receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveStoreSubsInAppSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveStoreSubs(string $id, array $params, array $headers = []): RetrieveStoreSubsInAppSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions/import-receipt?lang=php-v4
    *   @param array{
    *     product?: array{
    *     currency_code?: string,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     },
    * receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportReceiptInAppSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importReceipt(string $id, array $params, array $headers = []): ImportReceiptInAppSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions/import-subscription-without-receipt?lang=php-v4
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     started_at?: int,
    *     term_start?: int,
    *     term_end?: int,
    *     product_id?: string,
    *     currency_code?: string,
    *     transaction_id?: string,
    *     is_trial?: bool,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportSubscriptionInAppSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function importSubscription(string $id, array $params, array $headers = []): ImportSubscriptionInAppSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions/process-purchase-command?lang=php-v4
    *   @param array{
    *     product?: array{
    *     id?: string,
    *     currency_code?: string,
    *     price?: int,
    *     name?: string,
    *     price_in_decimal?: string,
    *     period?: string,
    *     period_unit?: string,
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
    *   @return ProcessReceiptInAppSubscriptionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function processReceipt(string $id, array $params, array $headers = []): ProcessReceiptInAppSubscriptionResponse;

}
?>