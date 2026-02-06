<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CurrencyResponse\CreateCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\ListCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\AddScheduleCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\RetrieveCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\RemoveScheduleCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\UpdateCurrencyResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CurrencyActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies/add-schedule?lang=php-v4
    *   @param array{
    *     manual_exchange_rate?: string,
    *     schedule_at?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddScheduleCurrencyResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addSchedule(string $id, array $params, array $headers = []): AddScheduleCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies/add-a-new-currency?lang=php-v4
    *   @param array{
    *     currency_code?: string,
    *     forex_type?: string,
    *     manual_exchange_rate?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCurrencyResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies/retrieve-a-currency?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCurrencyResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies/update-a-currency?lang=php-v4
    *   @param array{
    *     forex_type?: string,
    *     manual_exchange_rate?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCurrencyResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdateCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies/remove-schedule?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduleCurrencyResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function removeSchedule(string $id, array $headers = []): RemoveScheduleCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies/list-currencies?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCurrencyResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCurrencyResponse;

}
?>