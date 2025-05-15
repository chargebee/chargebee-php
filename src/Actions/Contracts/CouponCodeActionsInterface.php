<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CouponCodeResponse\ListCouponCodeResponse;
use Chargebee\Responses\CouponCodeResponse\CreateCouponCodeResponse;
use Chargebee\Responses\CouponCodeResponse\RetrieveCouponCodeResponse;
use Chargebee\Responses\CouponCodeResponse\ArchiveCouponCodeResponse;

Interface CouponCodeActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes?lang=php#list_coupon_codes
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
    */
    public function all(array $params = [], array $headers = []): ListCouponCodeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes?lang=php#create_a_coupon_code_for_a_coupon
    *   @param array{
    *     coupon_id?: string,
    *     coupon_set_name?: string,
    *     code?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCouponCodeResponse
    */
    public function create(array $params, array $headers = []): CreateCouponCodeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes?lang=php#retrieve_a_coupon_code
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCouponCodeResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveCouponCodeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupon_codes?lang=php#archive_a_coupon_code
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ArchiveCouponCodeResponse
    */
    public function archive(string $id, array $headers = []): ArchiveCouponCodeResponse;

}
?>