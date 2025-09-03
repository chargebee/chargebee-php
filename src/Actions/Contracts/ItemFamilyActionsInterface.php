<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ItemFamilyResponse\RetrieveItemFamilyResponse;
use Chargebee\Responses\ItemFamilyResponse\ListItemFamilyResponse;
use Chargebee\Responses\ItemFamilyResponse\CreateItemFamilyResponse;
use Chargebee\Responses\ItemFamilyResponse\DeleteItemFamilyResponse;
use Chargebee\Responses\ItemFamilyResponse\UpdateItemFamilyResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface ItemFamilyActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_families?lang=php#delete_an_item_family
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteItemFamilyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function delete(string $id, array $headers = []): DeleteItemFamilyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_families?lang=php#list_item_families
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
    * name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_present?: mixed,
    *     },
    * include_site_level_resources?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListItemFamilyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListItemFamilyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_families?lang=php#create_an_item_family
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     description?: string,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateItemFamilyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateItemFamilyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_families?lang=php#retrieve_an_item_family
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveItemFamilyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveItemFamilyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/item_families?lang=php#update_an_item_family
    *   @param array{
    *     name?: string,
    *     description?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateItemFamilyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateItemFamilyResponse;

}
?>