<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\BusinessEntityResponse\GetTransfersBusinessEntityResponse;
use Chargebee\Responses\BusinessEntityResponse\CreateTransfersBusinessEntityResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface BusinessEntityActionsInterface
{

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