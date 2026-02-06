<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ResourceMigrationResponse\RetrieveLatestResourceMigrationResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface ResourceMigrationActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/resource_migrations/retrieve-latest-migration-details?lang=php-v4
    *   @param array{
    *     from_site?: string,
    *     entity_type?: string,
    *     entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return RetrieveLatestResourceMigrationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveLatest(array $params, array $headers = []): RetrieveLatestResourceMigrationResponse;

}
?>