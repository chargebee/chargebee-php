<?php
namespace Chargebee\Actions;

use Chargebee\Responses\EinvoiceResponse\ListEinvoicesEinvoiceResponse;
use Chargebee\Actions\Contracts\EinvoiceActionsInterface;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\EinvoiceResponse\RetrieveEinvoiceResponse;
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

final class EinvoiceActions implements EinvoiceActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/einvoices/list-e-invoices?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * reference_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * invoice_id?: string,
    *     credit_note_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListEinvoicesEinvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listEinvoices(array $params = [], array $headers = []): ListEinvoicesEinvoiceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["einvoices"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("einvoice")
        ->withTelemetryOperation("listEinvoices")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListEinvoicesEinvoiceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/einvoices/retrieve-an-e-invoice?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveEinvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveEinvoiceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["einvoices",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withTelemetryResource("einvoice")
        ->withTelemetryOperation("retrieve")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveEinvoiceResponse::from($respObject->data, $respObject->headers);
    }

}
?>