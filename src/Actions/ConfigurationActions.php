<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\ConfigurationActionsInterface;
use Chargebee\Responses\ConfigurationResponse\ListConfigurationResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class ConfigurationActions implements ConfigurationActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/configurations?lang=php#list_site_configurations
    *   
    *   
    *   @param array<string, string> $headers
    *   @return ListConfigurationResponse
    */
    public function all(array $headers = []): ListConfigurationResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["configurations"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListConfigurationResponse::from($respObject->data, $respObject->headers);
    }

}
?>