<?php
namespace Chargebee\Actions;

use Chargebee\Responses\UsageFileResponse\UploadUsageFileResponse;
use Chargebee\Actions\Contracts\UsageFileActionsInterface;
use Chargebee\Responses\UsageFileResponse\StatusUsageFileResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class UsageFileActions implements UsageFileActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#get_upload_status
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return StatusUsageFileResponse
    */
    public function status(string $id, array $headers = []): StatusUsageFileResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["usage_files",$id,"status"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain("file-ingest")
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return StatusUsageFileResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#upload_usages_file
    *   @param array{
    *     file_name?: string,
    *     mime_type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UploadUsageFileResponse
    */
    public function upload(array $params, array $headers = []): UploadUsageFileResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["usage_files","upload"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain("file-ingest")
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return UploadUsageFileResponse::from($respObject->data, $respObject->headers);
    }

}
?>