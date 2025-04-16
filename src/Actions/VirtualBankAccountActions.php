<?php
namespace Chargebee\Actions;

use Chargebee\Responses\VirtualBankAccountResponse\CreateUsingPermanentTokenVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\RetrieveVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\SyncFundVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\DeleteVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\ListVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\CreateVirtualBankAccountResponse;
use Chargebee\Responses\VirtualBankAccountResponse\DeleteLocalVirtualBankAccountResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\ResponseObject;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class VirtualBankAccountActions
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#local_delete_a_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteLocalVirtualBankAccountResponse
    */
    public function deleteLocal(string $id, array $headers = []): DeleteLocalVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["virtual_bank_accounts",$id,"delete_local"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteLocalVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#delete_a_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteVirtualBankAccountResponse
    */
    public function delete(string $id, array $headers = []): DeleteVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["virtual_bank_accounts",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#list_virtual_bank_accounts
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListVirtualBankAccountResponse
    */
    public function all(array $params = [], array $headers = []): ListVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["virtual_bank_accounts"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#create_a_virtual_bank_account
    *   @param array{
    *     customer_id?: string,
    *     email?: string,
    *     scheme?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateVirtualBankAccountResponse
    */
    public function create(array $params, array $headers = []): CreateVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["virtual_bank_accounts"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#charge_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SyncFundVirtualBankAccountResponse
    */
    public function syncFund(string $id, array $headers = []): SyncFundVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["virtual_bank_accounts",$id,"sync_fund"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return SyncFundVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#retrieve_a_virtual_bank_account
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveVirtualBankAccountResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["virtual_bank_accounts",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/virtual_bank_accounts?lang=php#create_a_virtual_bank_account_using_permanent_token
    *   @param array{
    *     customer_id?: string,
    *     reference_id?: string,
    *     scheme?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsingPermanentTokenVirtualBankAccountResponse
    */
    public function createUsingPermanentToken(array $params, array $headers = []): CreateUsingPermanentTokenVirtualBankAccountResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["virtual_bank_accounts","create_using_permanent_token"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateUsingPermanentTokenVirtualBankAccountResponse::from($respObject->data, $respObject->headers);
    }

}
?>