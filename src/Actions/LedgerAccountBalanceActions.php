<?php
namespace Chargebee\Actions;

use Chargebee\Responses\LedgerAccountBalanceResponse\ListLedgerAccountBalancesLedgerAccountBalanceResponse;
use Chargebee\Actions\Contracts\LedgerAccountBalanceActionsInterface;
use Chargebee\Responses\LedgerAccountBalanceResponse\UpdateOverdraftLimitLedgerAccountBalanceResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

final class LedgerAccountBalanceActions implements LedgerAccountBalanceActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_account_balances/update-overdraft-limit?lang=php-v4
    *   @param array{
    *     subscription_id?: string,
    *     unit_id?: string,
    *     is_unlimited?: bool,
    *     limit?: string,
    *     change_reason?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return UpdateOverdraftLimitLedgerAccountBalanceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateOverdraftLimit(array $params, array $headers = []): UpdateOverdraftLimitLedgerAccountBalanceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["ledger_account_balances","update_overdraft_limit"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(false)
        ->withTelemetryResource("ledgerAccountBalance")
        ->withTelemetryOperation("updateOverdraftLimit")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateOverdraftLimitLedgerAccountBalanceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ledger_account_balances/list-ledger-account-balances?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     subscription_id?: array{
    *     is?: mixed,
    *     },
    * unit_id?: array{
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListLedgerAccountBalancesLedgerAccountBalanceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listLedgerAccountBalances(array $params, array $headers = []): ListLedgerAccountBalancesLedgerAccountBalanceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["ledger_account_balances"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withTelemetryResource("ledgerAccountBalance")
        ->withTelemetryOperation("listLedgerAccountBalances")
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListLedgerAccountBalancesLedgerAccountBalanceResponse::from($respObject->data, $respObject->headers);
    }

}
?>