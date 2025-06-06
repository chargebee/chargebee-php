<?php
namespace Chargebee\Actions;

use Chargebee\Responses\RuleResponse\RetrieveRuleResponse;
use Chargebee\Actions\Contracts\RuleActionsInterface;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class RuleActions implements RuleActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/rules?lang=php#retrieve_rule_data
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRuleResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveRuleResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["rules",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveRuleResponse::from($respObject->data, $respObject->headers);
    }

}
?>