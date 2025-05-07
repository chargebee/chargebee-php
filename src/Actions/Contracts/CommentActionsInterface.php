<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CommentResponse\ListCommentResponse;
use Chargebee\Responses\CommentResponse\RetrieveCommentResponse;
use Chargebee\Responses\CommentResponse\DeleteCommentResponse;
use Chargebee\Responses\CommentResponse\CreateCommentResponse;

Interface CommentActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/comments?lang=php#delete_a_comment
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCommentResponse
    */
    public function delete(string $id, array $headers = []): DeleteCommentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/comments?lang=php#retrieve_a_comment
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCommentResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveCommentResponse;

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
    public function all(array $params = [], array $headers = []): ListCommentResponse;

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
    public function create(array $params, array $headers = []): CreateCommentResponse;

}
?>