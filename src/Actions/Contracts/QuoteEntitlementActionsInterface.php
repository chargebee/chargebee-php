<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\QuoteEntitlementResponse\ListQuoteEntitlementsQuoteEntitlementResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface QuoteEntitlementActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/quote_entitlements/list-quote-entitlements?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     entity_id?: array{
    *     is?: mixed,
    *     },
    * start_date?: array{
    *     on?: mixed,
    *     },
    * end_date?: array{
    *     on?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListQuoteEntitlementsQuoteEntitlementResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listQuoteEntitlements(string $id, array $params = [], array $headers = []): ListQuoteEntitlementsQuoteEntitlementResponse;

}
?>