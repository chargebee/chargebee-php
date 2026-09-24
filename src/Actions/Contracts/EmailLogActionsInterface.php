<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EmailLogResponse\EmailLogsForCustomerEmailLogResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EmailLogActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/email_logs/list-email-logs-for-a-customer?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     sent_on?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     },
    * brand_id?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return EmailLogsForCustomerEmailLogResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function emailLogsForCustomer(string $id, array $params = [], array $headers = []): EmailLogsForCustomerEmailLogResponse;

}
?>