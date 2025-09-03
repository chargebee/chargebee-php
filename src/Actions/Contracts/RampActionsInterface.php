<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RampResponse\DeleteRampResponse;
use Chargebee\Responses\RampResponse\RetrieveRampResponse;
use Chargebee\Responses\RampResponse\UpdateRampResponse;
use Chargebee\Responses\RampResponse\ListRampResponse;
use Chargebee\Responses\RampResponse\CreateForSubscriptionRampResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface RampActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#retrieve_a_ramp
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#create_a_ramp
    *   @param array{
    *     items_to_add?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     items_to_update?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     coupons_to_add?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     discounts_to_add?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     }>,
    *     effective_from?: int,
    *     description?: string,
    *     coupons_to_remove?: array<string>,
    * discounts_to_remove?: array<string>,
    * items_to_remove?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateForSubscriptionRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForSubscription(string $id, array $params, array $headers = []): CreateForSubscriptionRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#list_ramps
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_deleted?: bool,
    *     status?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * subscription_id?: array{
    *     in?: mixed,
    *     is?: mixed,
    *     },
    * effective_from?: array{
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
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params, array $headers = []): ListRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#update_a_subscription_ramp
    *   @param array{
    *     items_to_add?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     items_to_update?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     billing_cycles?: int,
    *     service_period_days?: int,
    *     }>,
    *     item_tiers?: array<array{
    *     item_price_id?: string,
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     coupons_to_add?: array<array{
    *     coupon_id?: string,
    *     apply_till?: int,
    *     }>,
    *     discounts_to_add?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     }>,
    *     effective_from?: int,
    *     description?: string,
    *     coupons_to_remove?: array<string>,
    * discounts_to_remove?: array<string>,
    * items_to_remove?: array<string>,
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdateRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/ramps?lang=php#delete_a_ramp
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteRampResponse;

}
?>