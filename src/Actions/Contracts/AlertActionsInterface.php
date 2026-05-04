<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\AlertResponse\RetrieveAlertResponse;
use Chargebee\Responses\AlertResponse\ListAlertResponse;
use Chargebee\Responses\AlertResponse\UpdateAlertResponse;
use Chargebee\Responses\AlertResponse\CreateAlertResponse;
use Chargebee\Responses\AlertResponse\ApplicationAlertsForSubscriptionAlertResponse;
use Chargebee\Responses\AlertResponse\DeleteAlertResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface AlertActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alerts/list-applicable-alerts-for-a-subscription?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     status?: array{
    *     is?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ApplicationAlertsForSubscriptionAlertResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function applicationAlertsForSubscription(string $id, array $params = [], array $headers = []): ApplicationAlertsForSubscriptionAlertResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alerts/retrieve-an-alert?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveAlertResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveAlertResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alerts/update-an-alert?lang=php-v4
    *   @param array{
    *     threshold?: array{
    *     mode?: string,
    *     value?: float,
    *     },
    * status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateAlertResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateAlertResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alerts/delete-an-alert?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteAlertResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteAlertResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alerts/list-alerts?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     },
    * subscription_id?: array{
    *     is?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListAlertResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListAlertResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/alerts/create-an-alert?lang=php-v4
    *   @param array{
    *     threshold?: array{
    *     mode?: string,
    *     value?: float,
    *     },
    * filter_conditions?: array<array{
    *     field?: string,
    *     operator?: string,
    *     value?: string,
    *     }>,
    *     type?: string,
    *     name?: string,
    *     description?: string,
    *     metered_feature_id?: string,
    *     subscription_id?: string,
    *     meta?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateAlertResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateAlertResponse;

}
?>