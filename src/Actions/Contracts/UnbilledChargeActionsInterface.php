<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\UnbilledChargeResponse\DeleteUnbilledChargeResponse;
use Chargebee\Responses\UnbilledChargeResponse\CreateUnbilledChargeResponse;
use Chargebee\Responses\UnbilledChargeResponse\ListUnbilledChargeResponse;
use Chargebee\Responses\UnbilledChargeResponse\InvoiceNowEstimateUnbilledChargeResponse;
use Chargebee\Responses\UnbilledChargeResponse\InvoiceUnbilledChargesUnbilledChargeResponse;
use Chargebee\Responses\UnbilledChargeResponse\CreateUnbilledChargeUnbilledChargeResponse;
use Exception;
use Psr\Http\Client\ClientExceptionInterface;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface UnbilledChargeActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/unbilled_charges?lang=php#delete_an_unbilled_charge
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteUnbilledChargeResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function delete(string $id, array $headers = []): DeleteUnbilledChargeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/unbilled_charges?lang=php#create_an_estimate_for_unbilled_charges
    *   @param array{
    *     subscription_id?: string,
    *     customer_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return InvoiceNowEstimateUnbilledChargeResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function invoiceNowEstimate(array $params = [], array $headers = []): InvoiceNowEstimateUnbilledChargeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/unbilled_charges?lang=php#create_an_invoice_for_unbilled_charges
    *   @param array{
    *     subscription_id?: string,
    *     customer_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return InvoiceUnbilledChargesUnbilledChargeResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function invoiceUnbilledCharges(array $params = [], array $headers = []): InvoiceUnbilledChargesUnbilledChargeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/unbilled_charges?lang=php#list_unbilled_charges
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     include_deleted?: bool,
    *     is_voided?: bool,
    *     subscription_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListUnbilledChargeResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function all(array $params = [], array $headers = []): ListUnbilledChargeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/unbilled_charges?lang=php#create_unbilled_charges_for_item_subscription
    *   @param array{
    *     item_prices?: array<array{
    *     item_price_id?: string,
    *     quantity?: int,
    *     quantity_in_decimal?: string,
    *     unit_price?: int,
    *     unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
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
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     avalara_tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     date_from?: int,
    *     date_to?: int,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     subscription_id?: string,
    *     currency_code?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUnbilledChargeResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function create(array $params, array $headers = []): CreateUnbilledChargeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/unbilled_charges?lang=php#create_unbilled_charges_for_a_subscription
    *   @param array{
    *     addons?: array<array{
    *     id?: string,
    *     quantity?: int,
    *     unit_price?: int,
    *     quantity_in_decimal?: string,
    *     unit_price_in_decimal?: string,
    *     date_from?: int,
    *     date_to?: int,
    *     }>,
    *     charges?: array<array{
    *     amount?: int,
    *     amount_in_decimal?: string,
    *     description?: string,
    *     taxable?: bool,
    *     tax_profile_id?: string,
    *     avalara_tax_code?: string,
    *     hsn_code?: string,
    *     taxjar_product_code?: string,
    *     avalara_sale_type?: string,
    *     avalara_transaction_type?: int,
    *     avalara_service_type?: int,
    *     date_from?: int,
    *     date_to?: int,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     subscription_id?: string,
    *     currency_code?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUnbilledChargeUnbilledChargeResponse
    *   @throws PaymentException
    *   @throws ClientExceptionInterface
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    *   @throws ClientExceptionInterface
    */
    public function createUnbilledCharge(array $params, array $headers = []): CreateUnbilledChargeUnbilledChargeResponse;

}
?>