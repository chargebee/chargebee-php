<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\CouponResponse\DeleteCouponResponse;
use Chargebee\Responses\CouponResponse\CopyCouponResponse;
use Chargebee\Responses\CouponResponse\UpdateCouponResponse;
use Chargebee\Responses\CouponResponse\UpdateForItemsCouponResponse;
use Chargebee\Responses\CouponResponse\RetrieveCouponResponse;
use Chargebee\Responses\CouponResponse\CreateForItemsCouponResponse;
use Chargebee\Responses\CouponResponse\UnarchiveCouponResponse;
use Chargebee\Responses\CouponResponse\ListCouponResponse;
use Chargebee\Responses\CouponResponse\CreateCouponResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface CouponActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/list-coupons?lang=php-v4
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
    * discount_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * duration_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * status?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * apply_on?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * created_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * currency_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * applicable_item_price_ids?: array{
    *     is?: mixed,
    *     in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/create-a-coupon?lang=php-v4
    *   @param array{
    *     id?: string,
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: float,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     plan_constraint?: string,
    *     addon_constraint?: string,
    *     plan_ids?: array<string>,
    * addon_ids?: array<string>,
    * status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/update-a-coupon-for-items?lang=php-v4
    *   @param array{
    *     item_constraints?: array<array{
    *     constraint?: string,
    *     item_type?: string,
    *     item_price_ids?: mixed,
    *     }>,
    *     item_constraint_criteria?: array<array{
    *     item_type?: string,
    *     item_family_ids?: mixed,
    *     currencies?: mixed,
    *     item_price_periods?: mixed,
    *     }>,
    *     coupon_constraints?: array<array{
    *     entity_type?: string,
    *     type?: string,
    *     value?: string,
    *     }>,
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: float,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_from?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateForItemsCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateForItems(string $id, array $params, array $headers = []): UpdateForItemsCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/unarchive-a-coupon?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UnarchiveCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function unarchive(string $id, array $headers = []): UnarchiveCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/delete-a-coupon?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/copy-a-coupon?lang=php-v4
    *   @param array{
    *     from_site?: string,
    *     id_at_from_site?: string,
    *     id?: string,
    *     for_site_merging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CopyCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function copy(array $params, array $headers = []): CopyCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/retrieve-a-coupon?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/update-a-coupon?lang=php-v4
    *   @param array{
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: float,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     plan_constraint?: string,
    *     addon_constraint?: string,
    *     plan_ids?: array<string>,
    * addon_ids?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateCouponResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/coupons/create-a-coupon-for-items?lang=php-v4
    *   @param array{
    *     item_constraints?: array<array{
    *     constraint?: string,
    *     item_type?: string,
    *     item_price_ids?: mixed,
    *     }>,
    *     item_constraint_criteria?: array<array{
    *     item_type?: string,
    *     item_family_ids?: mixed,
    *     currencies?: mixed,
    *     item_price_periods?: mixed,
    *     }>,
    *     coupon_constraints?: array<array{
    *     entity_type?: string,
    *     type?: string,
    *     value?: string,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     invoice_name?: string,
    *     discount_type?: string,
    *     discount_amount?: int,
    *     currency_code?: string,
    *     discount_percentage?: float,
    *     discount_quantity?: int,
    *     apply_on?: string,
    *     duration_type?: string,
    *     duration_month?: int,
    *     valid_from?: int,
    *     valid_till?: int,
    *     max_redemptions?: int,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     included_in_mrr?: bool,
    *     period?: int,
    *     period_unit?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForItemsCouponResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForItems(array $params, array $headers = []): CreateForItemsCouponResponse;

}
?>