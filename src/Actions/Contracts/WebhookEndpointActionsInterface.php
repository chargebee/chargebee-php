<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\WebhookEndpointResponse\UpdateWebhookEndpointResponse;
use Chargebee\Responses\WebhookEndpointResponse\ListWebhookEndpointResponse;
use Chargebee\Responses\WebhookEndpointResponse\RetrieveWebhookEndpointResponse;
use Chargebee\Responses\WebhookEndpointResponse\DeleteWebhookEndpointResponse;
use Chargebee\Responses\WebhookEndpointResponse\CreateWebhookEndpointResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface WebhookEndpointActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/webhook_endpoints?lang=php#delete_a_webhook_endpoint
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteWebhookEndpointResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteWebhookEndpointResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/webhook_endpoints?lang=php#retrieve_a_webhook_endpoint
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveWebhookEndpointResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveWebhookEndpointResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/webhook_endpoints?lang=php#update_a_webhook_endpoint
    *   @param array{
    *     name?: string,
    *     api_version?: string,
    *     url?: string,
    *     primary_url?: bool,
    *     send_card_resource?: bool,
    *     basic_auth_password?: string,
    *     basic_auth_username?: string,
    *     disabled?: bool,
    *     enabled_events?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateWebhookEndpointResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateWebhookEndpointResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/webhook_endpoints?lang=php#list_webhook_endpoints
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListWebhookEndpointResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListWebhookEndpointResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/webhook_endpoints?lang=php#create_a_webhook_endpoint
    *   @param array{
    *     name?: string,
    *     api_version?: string,
    *     url?: string,
    *     primary_url?: bool,
    *     disabled?: bool,
    *     basic_auth_password?: string,
    *     basic_auth_username?: string,
    *     send_card_resource?: bool,
    *     chargebee_response_schema_type?: string,
    *     enabled_events?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateWebhookEndpointResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateWebhookEndpointResponse;

}
?>