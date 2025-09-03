<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CustomerEntitlementResponse\EntitlementsForCustomerCustomerEntitlementResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CustomerEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customer_entitlements?lang=php#list_customer_entitlements
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     consolidate_entitlements?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EntitlementsForCustomerCustomerEntitlementResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function entitlementsForCustomer(string $id, array $params = [], array $headers = []): EntitlementsForCustomerCustomerEntitlementResponse;

}
?>