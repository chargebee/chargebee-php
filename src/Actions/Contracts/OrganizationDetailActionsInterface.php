<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OrganizationDetailResponse\RetrieveOrganizationDetailResponse;
use Chargebee\Responses\OrganizationDetailResponse\CreateOrganizationDetailResponse;
use Chargebee\Responses\OrganizationDetailResponse\ListOrganizationDetailResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface OrganizationDetailActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/organization_details/list-organization-details?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     business_entity_id?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListOrganizationDetailResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListOrganizationDetailResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/organization_details/update-organization-details?lang=php-v4
    *   @param array{
    *     organization_name?: string,
    *     email?: string,
    *     address_line1?: string,
    *     address_line2?: string,
    *     address_line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country_code?: string,
    *     phone?: string,
    *     fax?: string,
    *     website?: string,
    *     is_vat_number_present?: bool,
    *     vat_number?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateOrganizationDetailResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateOrganizationDetailResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/organization_details/retrieve-organization-details?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOrganizationDetailResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveOrganizationDetailResponse;

}
?>