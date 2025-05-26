<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PricingPageSessionResponse\CreateForNewSubscriptionPricingPageSessionResponse;
use Chargebee\Responses\PricingPageSessionResponse\CreateForExistingSubscriptionPricingPageSessionResponse;

Interface PricingPageSessionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/pricing_page_sessions?lang=php#create_pricing_page_for_existing_subscription
    *   @param array{
    *     pricing_page?: array{
    *     id?: string,
    *     },
    * subscription?: mixed,
    *     discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     label?: string,
    *     }>,
    *     redirect_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForExistingSubscriptionPricingPageSessionResponse
    */
    public function createForExistingSubscription(array $params, array $headers = []): CreateForExistingSubscriptionPricingPageSessionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/pricing_page_sessions?lang=php#create_pricing_page_for_new_subscription
    *   @param array{
    *     pricing_page?: array{
    *     id?: string,
    *     },
    * subscription?: mixed,
    *     customer?: mixed,
    *     billing_address?: array{
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
    * discounts?: array<array{
    *     apply_on?: string,
    *     duration_type?: string,
    *     percentage?: float,
    *     amount?: int,
    *     period?: int,
    *     period_unit?: string,
    *     included_in_mrr?: bool,
    *     item_price_id?: string,
    *     label?: string,
    *     }>,
    *     redirect_url?: string,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForNewSubscriptionPricingPageSessionResponse
    */
    public function createForNewSubscription(array $params, array $headers = []): CreateForNewSubscriptionPricingPageSessionResponse;

}
?>