<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\EinvoiceResponse\ListEinvoicesEinvoiceResponse;
use Chargebee\Responses\EinvoiceResponse\RetrieveEinvoiceResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface EinvoiceActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/einvoices/list-e-invoices?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * reference_id?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * invoice_id?: string,
    *     credit_note_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListEinvoicesEinvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listEinvoices(array $params = [], array $headers = []): ListEinvoicesEinvoiceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/einvoices/retrieve-an-e-invoice?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveEinvoiceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveEinvoiceResponse;

}
?>