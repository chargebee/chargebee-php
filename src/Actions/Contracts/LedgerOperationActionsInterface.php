<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\LedgerOperationResponse\CaptureLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\CaptureAuthorizationLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\RetrieveLedgerOperationLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\AllocateLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\ReleaseAuthorizationLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\ListLedgerOperationsLedgerOperationResponse;
use Chargebee\Responses\LedgerOperationResponse\AuthorizeLedgerOperationResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface LedgerOperationActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/release-authorization?lang=php-v4
    *   @param array{
    *     authorization_id?: string,
    *     id?: string,
    *     ledger_operation_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ReleaseAuthorizationLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function releaseAuthorization(array $params, array $headers = []): ReleaseAuthorizationLedgerOperationResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/capture?lang=php-v4
    *   @param array{
    *     id?: string,
    *     subscription_id?: string,
    *     unit_id?: string,
    *     amount?: string,
    *     ledger_operation_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CaptureLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function capture(array $params, array $headers = []): CaptureLedgerOperationResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/allocate?lang=php-v4
    *   @param array{
    *     subscription_id?: string,
    *     unit_id?: string,
    *     id?: string,
    *     amount?: string,
    *     effective_from?: int,
    *     expires_at?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AllocateLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function allocate(array $params, array $headers = []): AllocateLedgerOperationResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/authorize?lang=php-v4
    *   @param array{
    *     id?: string,
    *     subscription_id?: string,
    *     unit_id?: string,
    *     amount?: string,
    *     ledger_operation_timestamp?: int,
    *     auto_release_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AuthorizeLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function authorize(array $params, array $headers = []): AuthorizeLedgerOperationResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/list-ledger-operations?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     subscription_id?: array{
    *     is?: mixed,
    *     },
    * unit_id?: array{
    *     is?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListLedgerOperationsLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listLedgerOperations(array $params, array $headers = []): ListLedgerOperationsLedgerOperationResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/capture-authorization?lang=php-v4
    *   @param array{
    *     authorization_id?: string,
    *     id?: string,
    *     amount?: string,
    *     ledger_operation_timestamp?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CaptureAuthorizationLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function captureAuthorization(array $params, array $headers = []): CaptureAuthorizationLedgerOperationResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_operations/retrieve-ledger-operation?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveLedgerOperationLedgerOperationResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieveLedgerOperation(string $id, array $headers = []): RetrieveLedgerOperationLedgerOperationResponse;

}
?>