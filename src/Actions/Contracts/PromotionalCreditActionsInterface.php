<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PromotionalCreditResponse\RetrievePromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\AddPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\ListPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\DeductPromotionalCreditResponse;
use Chargebee\Responses\PromotionalCreditResponse\SetPromotionalCreditResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PromotionalCreditActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits/retrieve-a-promotional-credit?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePromotionalCreditResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits/list-promotional-credits?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListPromotionalCreditResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListPromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits/deduct-promotional-credits?lang=php-v4
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return DeductPromotionalCreditResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deduct(array $params, array $headers = []): DeductPromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits/set-promotional-credits?lang=php-v4
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return SetPromotionalCreditResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function set(array $params, array $headers = []): SetPromotionalCreditResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_credits/add-promotional-credits?lang=php-v4
    *   @param array{
    *     customer_id?: string,
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return AddPromotionalCreditResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function add(array $params, array $headers = []): AddPromotionalCreditResponse;

}
?>