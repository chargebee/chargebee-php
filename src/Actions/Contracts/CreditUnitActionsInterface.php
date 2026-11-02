<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CreditUnitResponse\CreateCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\ReactivateCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\ListCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\UpdateCreditUnitResponse;
use Chargebee\Responses\CreditUnitResponse\ArchiveCreditUnitResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CreditUnitActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/list-credit-units?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     status?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCreditUnitResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/create-a-credit-unit?lang=php-v4
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     is_unlimited?: bool,
    *     overdraft_amount?: string,
    *     external_name?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateCreditUnitResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/archive-a-credit-unit?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function archive(string $id, array $headers = []): ArchiveCreditUnitResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/update-a-credit-unit?lang=php-v4
    *   @param array{
    *     name?: string,
    *     external_name?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateCreditUnitResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/credit_units/reactivate-a-credit-unit?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ReactivateCreditUnitResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function reactivate(string $id, array $headers = []): ReactivateCreditUnitResponse;

}
?>