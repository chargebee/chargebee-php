<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RecordedPurchaseResponse\RetrieveRecordedPurchaseResponse;
use Chargebee\Responses\RecordedPurchaseResponse\CreateRecordedPurchaseResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface RecordedPurchaseActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#retrieve_a_recorded_purchase
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRecordedPurchaseResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveRecordedPurchaseResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#record_a_purchase
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     },
    * apple_app_store?: array{
    *     transaction_id?: string,
    *     receipt?: string,
    *     product_id?: string,
    *     },
    * google_play_store?: array{
    *     purchase_token?: string,
    *     product_id?: string,
    *     order_id?: string,
    *     },
    * omnichannel_subscription?: array{
    *     id?: string,
    *     },
    * app_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateRecordedPurchaseResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateRecordedPurchaseResponse;

}
?>