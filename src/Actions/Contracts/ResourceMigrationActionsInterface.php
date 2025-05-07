<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ResourceMigrationResponse\RetrieveLatestResourceMigrationResponse;

Interface ResourceMigrationActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/resource_migrations?lang=php#retrieve_latest_migration_details
    *   @param array{
    *     from_site?: string,
    *     entity_type?: string,
    *     entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return RetrieveLatestResourceMigrationResponse
    */
    public function retrieveLatest(array $params, array $headers = []): RetrieveLatestResourceMigrationResponse;

}
?>