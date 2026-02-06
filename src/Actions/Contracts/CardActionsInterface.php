<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CardResponse\CopyCardForCustomerCardResponse;
use Chargebee\Responses\CardResponse\RetrieveCardResponse;
use Chargebee\Responses\CardResponse\SwitchGatewayForCustomerCardResponse;
use Chargebee\Responses\CardResponse\DeleteCardForCustomerCardResponse;
use Chargebee\Responses\CardResponse\UpdateCardForCustomerCardResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CardActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/cards/copy-card?lang=php-v4
    *   @param array{
    *     gateway_account_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CopyCardForCustomerCardResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function copyCardForCustomer(string $id, array $params, array $headers = []): CopyCardForCustomerCardResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/cards/retrieve-card-for-a-customer?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCardResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveCardResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/cards/switch-gateway?lang=php-v4
    *   @param array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SwitchGatewayForCustomerCardResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function switchGatewayForCustomer(string $id, array $params, array $headers = []): SwitchGatewayForCustomerCardResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/cards/delete-card-for-a-customer?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCardForCustomerCardResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteCardForCustomer(string $id, array $headers = []): DeleteCardForCustomerCardResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/cards/update-card-for-a-customer?lang=php-v4
    *   @param array{
    *     customer?: array{
    *     vat_number?: string,
    *     },
    * gateway?: string,
    *     gateway_account_id?: string,
    *     tmp_token?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     ip_address?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCardForCustomerCardResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateCardForCustomer(string $id, array $params, array $headers = []): UpdateCardForCustomerCardResponse;

}
?>