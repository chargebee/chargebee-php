<?php
namespace Chargebee\Actions;

use Chargebee\Responses\GatewayWebhookLogResponse\RetrieveGatewayWebhookLogResponse;
use Chargebee\Responses\GatewayWebhookLogResponse\ListGatewayWebhookLogResponse;
use Chargebee\Actions\Contracts\GatewayWebhookLogActionsInterface;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

final class GatewayWebhookLogActions implements GatewayWebhookLogActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gateway_webhook_logs/retrieve-a-gateway-webhook-log?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveGatewayWebhookLogResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveGatewayWebhookLogResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["gateway_webhook_logs",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("gatewayWebhookLog")
        ->withTelemetryOperation("retrieve")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveGatewayWebhookLogResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gateway_webhook_logs/list-gateway-webhook-logs?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     webhook_id?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * gateway?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * status_code?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * method?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * url?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * id_at_gateway?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * customer_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * invoice_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * transaction_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * payment_method_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * gateway_credential_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * payment_attempt_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * payment_intent_handle?: array{
    *     in?: mixed,
    *     is_not?: mixed,
    *     not_in?: mixed,
    *     is?: mixed,
    *     },
    * received_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListGatewayWebhookLogResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListGatewayWebhookLogResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["gateway_webhook_logs"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("gatewayWebhookLog")
        ->withTelemetryOperation("list")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListGatewayWebhookLogResponse::from($respObject->data, $respObject->headers);
    }

}
?>