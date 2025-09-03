<?php
namespace Chargebee\Actions;

use Chargebee\Responses\BusinessEntityResponse\GetTransfersBusinessEntityResponse;
use Chargebee\Actions\Contracts\BusinessEntityActionsInterface;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\BusinessEntityResponse\CreateTransfersBusinessEntityResponse;
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

final class BusinessEntityActions implements BusinessEntityActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities?lang=php#list_the_business_entity_transfers
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     resource_type?: array{
    *     is?: mixed,
    *     },
    * resource_id?: array{
    *     is?: mixed,
    *     },
    * active_resource_id?: array{
    *     is?: mixed,
    *     },
    * created_at?: array{
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
    *   @return GetTransfersBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function getTransfers(array $params = [], array $headers = []): GetTransfersBusinessEntityResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["business_entities","transfers"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return GetTransfersBusinessEntityResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities?lang=php#transfer_resources_to_another_business_entity
    *   @param array{
    *     active_resource_ids?: array<string>,
    * destination_business_entity_ids?: array<string>,
    * source_business_entity_ids?: array<string>,
    * resource_types?: array<string>,
    * reason_codes?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateTransfersBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createTransfers(array $params, array $headers = []): CreateTransfersBusinessEntityResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["business_entities","transfers"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateTransfersBusinessEntityResponse::from($respObject->data, $respObject->headers);
    }

}
?>