<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CouponSetResponse\CreateCouponSetResponse;
use Chargebee\Responses\CouponSetResponse\RetrieveCouponSetResponse;
use Chargebee\Responses\CouponSetResponse\AddCouponCodesCouponSetResponse;
use Chargebee\Responses\CouponSetResponse\ListCouponSetResponse;
use Chargebee\Responses\CouponSetResponse\UpdateCouponSetResponse;
use Chargebee\Responses\CouponSetResponse\DeleteCouponSetResponse;
use Chargebee\Responses\CouponSetResponse\DeleteUnusedCouponCodesCouponSetResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CouponSetActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#list_coupon_sets
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * coupon_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * total_count?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * redeemed_count?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * archived_count?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListCouponSetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#create_a_coupon_set
    *   @param array{
    *     coupon_id?: string,
    *     name?: string,
    *     id?: string,
    *     meta_data?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateCouponSetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#update_a_coupon_set
    *   @param array{
    *     name?: string,
    *     meta_data?: mixed,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateCouponSetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#retrieve_a_coupon_set
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function retrieve(string $id, array $headers = []): RetrieveCouponSetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#add_coupon_codes_to_coupon_set
    *   @param array{
    *     code?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddCouponCodesCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function addCouponCodes(string $id, array $params = [], array $headers = []): AddCouponCodesCouponSetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#delete_unused_coupon_codes
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteUnusedCouponCodesCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function deleteUnusedCouponCodes(string $id, array $headers = []): DeleteUnusedCouponCodesCouponSetResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_sets?lang=php#delete_a_coupon_set
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCouponSetResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function delete(string $id, array $headers = []): DeleteCouponSetResponse;

}
?>