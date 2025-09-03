<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PlanResponse\UpdatePlanResponse;
use Chargebee\Responses\PlanResponse\CreatePlanResponse;
use Chargebee\Responses\PlanResponse\UnarchivePlanResponse;
use Chargebee\Responses\PlanResponse\DeletePlanResponse;
use Chargebee\Responses\PlanResponse\RetrievePlanResponse;
use Chargebee\Responses\PlanResponse\CopyPlanResponse;
use Chargebee\Responses\PlanResponse\ListPlanResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PlanActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#unarchive_a_plan
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UnarchivePlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function unarchive(string $id, array $headers = []): UnarchivePlanResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#delete_a_plan
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeletePlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeletePlanResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#copy_a_plan
    *   @param array{
    *     from_site?: string,
    *     id_at_from_site?: string,
    *     id?: string,
    *     for_site_merging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CopyPlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function copy(array $params, array $headers = []): CopyPlanResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#list_plans
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
    * price?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * period?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     },
    * period_unit?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * trial_period?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     lt?: mixed,
    *     lte?: mixed,
    *     gt?: mixed,
    *     gte?: mixed,
    *     between?: mixed,
    *     is_present?: mixed,
    *     },
    * trial_period_unit?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * addon_applicability?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * giftable?: array{
    *     is?: mixed,
    *     },
    * charge_model?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * pricing_model?: array{
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
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * currency_code?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * include_deleted?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListPlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListPlanResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#create_a_plan
    *   @param array{
    *     tiers?: array<array{
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     applicable_addons?: array<array{
    *     id?: string,
    *     }>,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     on_event?: string,
    *     charge_once?: bool,
    *     }>,
    *     attached_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     billing_cycles?: int,
    *     type?: string,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     invoice_name?: string,
    *     description?: string,
    *     trial_period?: int,
    *     trial_period_unit?: string,
    *     trial_end_action?: string,
    *     period?: int,
    *     period_unit?: string,
    *     setup_cost?: int,
    *     price?: int,
    *     price_in_decimal?: string,
    *     currency_code?: string,
    *     billing_cycles?: int,
    *     pricing_model?: string,
    *     charge_model?: string,
    *     free_quantity?: int,
    *     free_quantity_in_decimal?: string,
    *     addon_applicability?: string,
    *     downgrade_penalty?: float,
    *     redirect_url?: string,
    *     enabled_in_hosted_pages?: bool,
    *     enabled_in_portal?: bool,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     sku?: string,
    *     accounting_code?: string,
    *     accounting_category1?: string,
    *     accounting_category2?: string,
    *     accounting_category3?: string,
    *     accounting_category4?: string,
    *     is_shippable?: bool,
    *     shipping_frequency_period?: int,
    *     shipping_frequency_period_unit?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     show_description_in_invoices?: bool,
    *     show_description_in_quotes?: bool,
    *     giftable?: bool,
    *     status?: string,
    *     claim_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreatePlanResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#retrieve_a_plan
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePlanResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/plans?lang=php#update_a_plan
    *   @param array{
    *     tiers?: array<array{
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     name?: string,
    *     invoice_name?: string,
    *     description?: string,
    *     trial_period?: int,
    *     trial_period_unit?: string,
    *     trial_end_action?: string,
    *     period?: int,
    *     period_unit?: string,
    *     setup_cost?: int,
    *     price?: int,
    *     price_in_decimal?: string,
    *     currency_code?: string,
    *     billing_cycles?: int,
    *     pricing_model?: string,
    *     charge_model?: string,
    *     free_quantity?: int,
    *     free_quantity_in_decimal?: string,
    *     addon_applicability?: string,
    *     downgrade_penalty?: float,
    *     redirect_url?: string,
    *     enabled_in_hosted_pages?: bool,
    *     enabled_in_portal?: bool,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     sku?: string,
    *     accounting_code?: string,
    *     accounting_category1?: string,
    *     accounting_category2?: string,
    *     accounting_category3?: string,
    *     accounting_category4?: string,
    *     is_shippable?: bool,
    *     shipping_frequency_period?: int,
    *     shipping_frequency_period_unit?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     show_description_in_invoices?: bool,
    *     show_description_in_quotes?: bool,
    *     applicable_addons?: array<array{
    *     id?: string,
    *     }>,
    *     attached_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     billing_cycles?: int,
    *     type?: string,
    *     }>,
    *     event_based_addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     on_event?: string,
    *     charge_once?: bool,
    *     }>,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePlanResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdatePlanResponse;

}
?>