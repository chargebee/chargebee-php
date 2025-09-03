<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UsageResponse\RetrieveUsageResponse;
use Chargebee\Responses\UsageResponse\CreateUsageResponse;
use Chargebee\Responses\UsageResponse\ListUsageResponse;
use Chargebee\Responses\UsageResponse\PdfUsageResponse;
use Chargebee\Responses\UsageResponse\DeleteUsageResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface UsageActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usages?lang=php#retrieve_usages_for_an_invoice_as_pdf
    *   @param array{
    *     invoice?: array{
    *     id?: string,
    *     },
    * disposition_type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PdfUsageResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function pdf(array $params, array $headers = []): PdfUsageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usages?lang=php#retrieve_a_usage
    *   @param array{
    *     id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveUsageResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $params, array $headers = []): RetrieveUsageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usages?lang=php#create_a_usage
    *   @param array{
    *     id?: string,
    *     item_price_id?: string,
    *     quantity?: string,
    *     usage_date?: int,
    *     dedupe_option?: string,
    *     note?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateUsageResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(string $id, array $params, array $headers = []): CreateUsageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usages?lang=php#delete_a_usage
    *   @param array{
    *     id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteUsageResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function delete(string $id, array $params, array $headers = []): DeleteUsageResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/usages?lang=php#list_usages
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * subscription_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * usage_date?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * item_price_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * invoice_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * source?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListUsageResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListUsageResponse;

}
?>