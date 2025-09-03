<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EntitlementResponse\ListEntitlementResponse;
use Chargebee\Responses\EntitlementResponse\CreateEntitlementResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements?lang=php#list_all_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     feature_id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * entity_type?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * entity_id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * include_drafts?: bool,
    *     embed?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListEntitlementResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListEntitlementResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/entitlements?lang=php#upsert_or_remove_entitlements_for_a_feature
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
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateEntitlementResponse;

}
?>