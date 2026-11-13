<?php
namespace Chargebee\Responses\OrganizationDetailResponse;

use Chargebee\Resources\OrganizationDetail\OrganizationDetail;

class ListOrganizationDetailResponseListObject
{ 
    public OrganizationDetail $organization_detail;
    public function __construct(
        OrganizationDetail $organization_detail,
    ) { 
        $this->organization_detail = $organization_detail;
    }
}
