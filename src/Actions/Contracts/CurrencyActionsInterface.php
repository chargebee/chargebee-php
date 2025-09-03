<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CurrencyResponse\CreateCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\ListCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\AddScheduleCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\RetrieveCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\RemoveScheduleCurrencyResponse;
use Chargebee\Responses\CurrencyResponse\UpdateCurrencyResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CurrencyActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#add_schedule
    *   @param array{
    *     manual_exchange_rate?: string,
    *     schedule_at?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddScheduleCurrencyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function addSchedule(string $id, array $params, array $headers = []): AddScheduleCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#add_a_new_currency
    *   @param array{
    *     currency_code?: string,
    *     forex_type?: string,
    *     manual_exchange_rate?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCurrencyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#retrieve_a_currency
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCurrencyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#update_a_currency
    *   @param array{
    *     forex_type?: string,
    *     manual_exchange_rate?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCurrencyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function update(string $id, array $params, array $headers = []): UpdateCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#remove_schedule
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RemoveScheduleCurrencyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function removeSchedule(string $id, array $headers = []): RemoveScheduleCurrencyResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/currencies?lang=php#list_currencies
    *   
    *   
    *   @param array<string, string> $headers
    *   @return ListCurrencyResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $headers = []): ListCurrencyResponse;

}
?>