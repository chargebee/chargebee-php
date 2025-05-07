<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\SiteMigrationDetailResponse\ListSiteMigrationDetailResponse;

Interface SiteMigrationDetailActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/site_migration_details?lang=php#list_site_migration_details
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     entity_id_at_other_site?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * other_site_name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * entity_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * entity_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListSiteMigrationDetailResponse
    */
    public function all(array $params = [], array $headers = []): ListSiteMigrationDetailResponse;

}
?>