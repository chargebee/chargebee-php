<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\AlertStatusResponse\AlertStatusesForAlertAlertStatusResponse;
use Chargebee\Responses\AlertStatusResponse\AlertStatusesForSubscriptionAlertStatusResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface AlertStatusActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alert_statuses/list-alert-statuses-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     alarm_status?: array{
    *     is?: mixed,
    *     },
    * alert_id?: array{
    *     in?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AlertStatusesForSubscriptionAlertStatusResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function alertStatusesForSubscription(string $id, array $params = [], array $headers = []): AlertStatusesForSubscriptionAlertStatusResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alert_statuses/list-alert-statuses-for-an-alert?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     alarm_status?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AlertStatusesForAlertAlertStatusResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function alertStatusesForAlert(string $id, array $params = [], array $headers = []): AlertStatusesForAlertAlertStatusResponse;

}
?>