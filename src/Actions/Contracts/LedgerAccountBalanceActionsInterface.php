<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\LedgerAccountBalanceResponse\ListLedgerAccountBalancesLedgerAccountBalanceResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface LedgerAccountBalanceActionsInterface
{

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
    public function listLedgerAccountBalances(array $params, array $headers = []): ListLedgerAccountBalancesLedgerAccountBalanceResponse;

}
?>