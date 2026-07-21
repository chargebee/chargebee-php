<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\MeteredFeatureResponse\ArchiveMeteredFeatureResponse;
use Chargebee\Responses\MeteredFeatureResponse\ReactivateMeteredFeatureResponse;
use Chargebee\Responses\MeteredFeatureResponse\CreateMeteredFeatureResponse;
use Chargebee\Responses\MeteredFeatureResponse\DeleteMeteredFeatureResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface MeteredFeatureActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/metered_features/reactivate-a-metered-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReactivateMeteredFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function reactivate(string $id, array $headers = []): ReactivateMeteredFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/metered_features/delete-a-metered-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteMeteredFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteMeteredFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/metered_features/create-a-metered-feature?lang=php-v4
    *   @param array{
    *     column_definitions?: array<array{
    *     column_name?: string,
    *     data_type?: string,
    *     }>,
    *     name?: string,
    *     description?: string,
    *     feature_unit?: string,
    *     query?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateMeteredFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateMeteredFeatureResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/metered_features/archive-a-metered-feature?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveMeteredFeatureResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function archive(string $id, array $headers = []): ArchiveMeteredFeatureResponse;

}
?>