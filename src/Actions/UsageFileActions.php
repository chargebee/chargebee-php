<?php
namespace Chargebee\Actions;

use Chargebee\Responses\UsageFileResponse\UploadUrlUsageFileResponse;
use Chargebee\Actions\Contracts\UsageFileActionsInterface;
use Chargebee\Responses\UsageFileResponse\ProcessingStatusUsageFileResponse;
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
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#get_uploaded_file_processing_status
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ProcessingStatusUsageFileResponse
    */
    public function processingStatus(string $id, array $headers = []): ProcessingStatusUsageFileResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["usage_files",$id,"processing_status"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain("file-ingest")
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ProcessingStatusUsageFileResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usage_files?lang=php#get_usages_file_upload_url
    *   @param array{
    *     file_name?: string,
    *     mime_type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UploadUrlUsageFileResponse
    */
    public function uploadUrl(array $params, array $headers = []): UploadUrlUsageFileResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["usage_files","upload_url"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain("file-ingest")
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UploadUrlUsageFileResponse::from($respObject->data, $respObject->headers);
    }

}
?>