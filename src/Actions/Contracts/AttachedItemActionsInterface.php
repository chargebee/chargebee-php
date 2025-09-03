<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\AttachedItemResponse\ListAttachedItemResponse;
use Chargebee\Responses\AttachedItemResponse\RetrieveAttachedItemResponse;
use Chargebee\Responses\AttachedItemResponse\DeleteAttachedItemResponse;
use Chargebee\Responses\AttachedItemResponse\CreateAttachedItemResponse;
use Chargebee\Responses\AttachedItemResponse\UpdateAttachedItemResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface AttachedItemActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#retrieve_an_attached_item_
    *   @param array{
    *     parent_item_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveAttachedItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $params, array $headers = []): RetrieveAttachedItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#update_an_attached_item
    *   @param array{
    *     parent_item_id?: string,
    *     type?: string,
    *     billing_cycles?: int,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateAttachedItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdateAttachedItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#list_attached_items
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * charge_on_event?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListAttachedItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(string $id, array $params = [], array $headers = []): ListAttachedItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#create_an_attached_item
    *   @param array{
    *     item_id?: string,
    *     type?: string,
    *     billing_cycles?: int,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     charge_on_event?: string,
    *     charge_once?: bool,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateAttachedItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(string $id, array $params, array $headers = []): CreateAttachedItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/attached_items?lang=php#delete_an_attached_item
    *   @param array{
    *     parent_item_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteAttachedItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $params, array $headers = []): DeleteAttachedItemResponse;

}
?>