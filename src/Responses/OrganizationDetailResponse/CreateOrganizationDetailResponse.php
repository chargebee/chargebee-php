<?php

namespace Chargebee\Responses\OrganizationDetailResponse;
use Chargebee\Resources\OrganizationDetail\OrganizationDetail;

use Chargebee\ValueObjects\ResponseBase;

class CreateOrganizationDetailResponse extends ResponseBase { 
    /**
    *
    * @var ?OrganizationDetail $organization_detail
    */
    public ?OrganizationDetail $organization_detail;
    

    private function __construct(
        ?OrganizationDetail $organization_detail,
        array $responseHeaders=[],
        array $rawResponse=[]
    )
    {
        parent::__construct($responseHeaders, $rawResponse);
        $this->organization_detail = $organization_detail;
        
    }
    public static function from(array $resourceAttributes, array $headers = []): self
    {
        return new self(
            isset($resourceAttributes['organization_detail']) ? OrganizationDetail::from($resourceAttributes['organization_detail']) : null,
             $headers, $resourceAttributes);
    }

    public function toArray(): array
    {
        $data = array_filter([ 
        ]);
         
        if($this->organization_detail instanceof OrganizationDetail){
            $data['organization_detail'] = $this->organization_detail->toArray();
        } 

        return $data;
    }
}
?>