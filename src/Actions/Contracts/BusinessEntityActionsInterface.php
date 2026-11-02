<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\BusinessEntityResponse\CreateBusinessEntityResponse;
use Chargebee\Responses\BusinessEntityResponse\UpdateBusinessEntityResponse;
use Chargebee\Responses\BusinessEntityResponse\ListBusinessEntityResponse;
use Chargebee\Responses\BusinessEntityResponse\GetTransfersBusinessEntityResponse;
use Chargebee\Responses\BusinessEntityResponse\RetrieveBusinessEntityResponse;
use Chargebee\Responses\BusinessEntityResponse\CreateTransfersBusinessEntityResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface BusinessEntityActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities/retrieve-a-business-entity?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveBusinessEntityResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities/update-business-entity?lang=php-v4
    *   @param array{
    *     name?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateBusinessEntityResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities/list-business-entities?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_deleted?: bool,
    *     name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListBusinessEntityResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities/create-a-business-entity?lang=php-v4
    *   @param array{
    *     name?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateBusinessEntityResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities/list-the-business-entity-transfers?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     resource_type?: array{
    *     is?: mixed,
    *     },
    * resource_id?: array{
    *     is?: mixed,
    *     },
    * active_resource_id?: array{
    *     is?: mixed,
    *     },
    * created_at?: array{
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
    *   @return GetTransfersBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function getTransfers(array $params = [], array $headers = []): GetTransfersBusinessEntityResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/business_entities/transfer-resources-to-another-business-entity?lang=php-v4
    *   @param array{
    *     active_resource_ids?: array<string>,
    * destination_business_entity_ids?: array<string>,
    * source_business_entity_ids?: array<string>,
    * resource_types?: array<string>,
    * reason_codes?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateTransfersBusinessEntityResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createTransfers(array $params, array $headers = []): CreateTransfersBusinessEntityResponse;

}
?>