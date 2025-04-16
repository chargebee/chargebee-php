<?php
namespace Chargebee\ValueObjects;

use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\PaymentException;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Psr\Http\Client\ClientExceptionInterface;

class APIRequester
{
    private HttpClientFactory $httpClientFactory;

    public function __construct(HttpClientFactory $httpClientFactory)
    {
        $this->httpClientFactory = $httpClientFactory;
    }

    /**
     * @throws PaymentException
     * @throws ClientExceptionInterface
     * @throws OperationFailedException
     * @throws APIError
     * @throws InvalidRequestException
     * @throws \Exception
     */
    public function makeRequest(ChargebeePayload $payload): ResponseObject
    {
        $client = $this->httpClientFactory->create();
        $request = $this->httpClientFactory->createRequest($payload);
        $response = $client->sendRequest($request);
        
        return new ResponseObject(
            $response->getBody(),
            $response->getStatusCode(),
            $response->getHeaders()
        );
    }
}
?>