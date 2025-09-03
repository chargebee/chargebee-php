<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\GiftResponse\CreateForItemsGiftResponse;
use Chargebee\Responses\GiftResponse\UpdateGiftGiftResponse;
use Chargebee\Responses\GiftResponse\ListGiftResponse;
use Chargebee\Responses\GiftResponse\ClaimGiftResponse;
use Chargebee\Responses\GiftResponse\RetrieveGiftResponse;
use Chargebee\Responses\GiftResponse\CancelGiftResponse;
use Chargebee\Responses\GiftResponse\CreateGiftResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface GiftActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#create_a_gift_subscription_for_items
    *   @param array{
    *     gifter?: array{
    *     customer_id?: string,
    *     signature?: string,
    *     note?: string,
    *     payment_src_id?: string,
    *     },
    * gift_receiver?: array{
    *     customer_id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_information?: mixed,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * subscription_items?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     }>,
    *     scheduled_at?: int,
    *     auto_claim?: bool,
    *     no_expiry?: bool,
    *     claim_expiry_date?: int,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForItemsGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function createForItems(array $params, array $headers = []): CreateForItemsGiftResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#cancel_a_gift
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CancelGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function cancel(string $id, array $headers = []): CancelGiftResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#update_a_gift
    *   @param array{
    *     scheduled_at?: int,
    *     comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateGiftGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function updateGift(string $id, array $params, array $headers = []): UpdateGiftGiftResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#list_gifts
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     gift_receiver?: array{
    *     email?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * gifter?: array{
    *     customer_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListGiftResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#create_a_gift
    *   @param array{
    *     gifter?: array{
    *     customer_id?: string,
    *     signature?: string,
    *     note?: string,
    *     payment_src_id?: string,
    *     },
    * gift_receiver?: array{
    *     customer_id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_information?: mixed,
    *     },
    * shipping_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     company?: string,
    *     phone?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     validation_status?: string,
    *     },
    * subscription?: array{
    *     plan_id?: string,
    *     plan_quantity?: int,
    *     plan_quantity_in_decimal?: string,
    *     },
    * addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     }>,
    *     scheduled_at?: int,
    *     auto_claim?: bool,
    *     no_expiry?: bool,
    *     claim_expiry_date?: int,
    *     coupon_ids?: array<string>,
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateGiftResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#retrieve_a_gift
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveGiftResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/gifts?lang=php#claim_a_gift
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ClaimGiftResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function claim(string $id, array $headers = []): ClaimGiftResponse;

}
?>