<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CouponCodeResponse\ListCouponCodeResponse;
use Chargebee\Responses\CouponCodeResponse\CreateCouponCodeResponse;
use Chargebee\Responses\CouponCodeResponse\RetrieveCouponCodeResponse;
use Chargebee\Responses\CouponCodeResponse\ArchiveCouponCodeResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CouponCodeActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes/list-coupon-codes?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     code?: array{
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
    * coupon_set_name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
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
    *   @return ListCouponCodeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCouponCodeResponse;

    /**
    *   
    *   @param array{
    *     coupon_id?: string,
    *     coupon_set_name?: string,
    *     code?: string,
    *     } $params Description of the parameters
    *   
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return CreateCouponCodeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateCouponCodeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes/retrieve-a-coupon-code?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCouponCodeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveCouponCodeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes/archive-a-coupon-code?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveCouponCodeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function archive(string $id, array $headers = []): ArchiveCouponCodeResponse;

}
?>