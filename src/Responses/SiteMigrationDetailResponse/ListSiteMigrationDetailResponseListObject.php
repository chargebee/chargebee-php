<?php
namespace Chargebee\Responses\SiteMigrationDetailResponse;

use Chargebee\Resources\SiteMigrationDetail\SiteMigrationDetail;

class ListSiteMigrationDetailResponseListObject
{ 
    public SiteMigrationDetail $site_migration_detail;
    public function __construct(
        SiteMigrationDetail $site_migration_detail,
    ) { 
        $this->site_migration_detail = $site_migration_detail;
    }
}
