<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\AddonResponse\CopyAddonResponse;
use Chargebee\Responses\AddonResponse\ListAddonResponse;
use Chargebee\Responses\AddonResponse\RetrieveAddonResponse;
use Chargebee\Responses\AddonResponse\UpdateAddonResponse;
use Chargebee\Responses\AddonResponse\UnarchiveAddonResponse;
use Chargebee\Responses\AddonResponse\CreateAddonResponse;
use Chargebee\Responses\AddonResponse\DeleteAddonResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface AddonActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#copy_an_addon
    *   @param array{
    *     from_site?: string,
    *     id_at_from_site?: string,
    *     id?: string,
    *     for_site_merging?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CopyAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function copy(array $params, array $headers = []): CopyAddonResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#unarchive_an_addon
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UnarchiveAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function unarchive(string $id, array $headers = []): UnarchiveAddonResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#retrieve_an_addon
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveAddonResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#update_an_addon
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
    *     charge_type?: string,
    *     price?: int,
    *     currency_code?: string,
    *     period?: int,
    *     period_unit?: string,
    *     pricing_model?: string,
    *     type?: string,
    *     unit?: string,
    *     enabled_in_portal?: bool,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     sku?: string,
    *     accounting_code?: string,
    *     accounting_category1?: string,
    *     accounting_category2?: string,
    *     accounting_category3?: string,
    *     accounting_category4?: string,
    *     is_shippable?: bool,
    *     shipping_frequency_period?: int,
    *     shipping_frequency_period_unit?: string,
    *     included_in_mrr?: bool,
    *     show_description_in_invoices?: bool,
    *     show_description_in_quotes?: bool,
    *     price_in_decimal?: string,
    *     proration_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdateAddonResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#list_addons
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
    * pricing_model?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * charge_type?: array{
    *     is?: mixed,
    *     is_not?: mixed,
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
    *   @return ListAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListAddonResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#create_an_addon
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
    *     id?: string,
    *     name?: string,
    *     invoice_name?: string,
    *     description?: string,
    *     charge_type?: string,
    *     price?: int,
    *     currency_code?: string,
    *     period?: int,
    *     period_unit?: string,
    *     pricing_model?: string,
    *     type?: string,
    *     unit?: string,
    *     enabled_in_portal?: bool,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     invoice_notes?: string,
    *     meta_data?: mixed,
    *     sku?: string,
    *     accounting_code?: string,
    *     accounting_category1?: string,
    *     accounting_category2?: string,
    *     accounting_category3?: string,
    *     accounting_category4?: string,
    *     is_shippable?: bool,
    *     shipping_frequency_period?: int,
    *     shipping_frequency_period_unit?: string,
    *     included_in_mrr?: bool,
    *     show_description_in_invoices?: bool,
    *     show_description_in_quotes?: bool,
    *     price_in_decimal?: string,
    *     proration_type?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateAddonResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/addons?lang=php#delete_an_addon
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteAddonResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteAddonResponse;

}
?>