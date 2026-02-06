<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CustomerEntitlementResponse\EntitlementsForCustomerCustomerEntitlementResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CustomerEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customer_entitlements/list-customer-entitlements?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     consolidate_entitlements?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EntitlementsForCustomerCustomerEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function entitlementsForCustomer(string $id, array $params = [], array $headers = []): EntitlementsForCustomerCustomerEntitlementResponse;

}
?>