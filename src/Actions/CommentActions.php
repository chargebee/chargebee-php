<?php
namespace Chargebee\Actions;

use Chargebee\Actions\Contracts\CommentActionsInterface;
use Chargebee\Responses\CommentResponse\ListCommentResponse;
use Chargebee\Responses\CommentResponse\RetrieveCommentResponse;
use Chargebee\Responses\CommentResponse\DeleteCommentResponse;
use Chargebee\Responses\CommentResponse\CreateCommentResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;

final class CommentActions implements CommentActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/comments?lang=php#delete_a_comment
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCommentResponse
    */
    public function delete(string $id, array $headers = []): DeleteCommentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["comments",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteCommentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/comments?lang=php#retrieve_a_comment
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCommentResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveCommentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["comments",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveCommentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/comments?lang=php#list_comments
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     entity_type?: string,
    *     entity_id?: string,
    *     created_at?: array{
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
    *   @return ListCommentResponse
    */
    public function all(array $params = [], array $headers = []): ListCommentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["comments"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCommentResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/comments?lang=php#create_a_comment
    *   @param array{
    *     entity_type?: string,
    *     entity_id?: string,
    *     notes?: string,
    *     added_by?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCommentResponse
    */
    public function create(array $params, array $headers = []): CreateCommentResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["comments"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCommentResponse::from($respObject->data, $respObject->headers);
    }

}
?>