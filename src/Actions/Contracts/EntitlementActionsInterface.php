<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EntitlementResponse\ListEntitlementResponse;
use Chargebee\Responses\EntitlementResponse\CreateEntitlementResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements/list-all-entitlements?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * entity_type?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * entity_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements/upsert-or-remove-entitlements-for-a-feature?lang=php-v4
    *   @param array{
    *     entitlements?: array<array{
    *     entity_id?: string,
    *     feature_id?: string,
    *     entity_type?: string,
    *     value?: string,
    *     apply_grandfathering?: bool,
    *     }>,
    *     action?: string,
    *     change_reason?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateEntitlementResponse;

}
?>