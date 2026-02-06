<?php
namespace Chargebee\Actions;

use Chargebee\Responses\CustomerResponse\UpdateHierarchySettingsCustomerResponse;
use Chargebee\Responses\CustomerResponse\RetrieveCustomerResponse;
use Chargebee\Responses\CustomerResponse\AddContactCustomerResponse;
use Chargebee\Responses\CustomerResponse\MoveCustomerResponse;
use Chargebee\Responses\CustomerResponse\UpdatePaymentMethodCustomerResponse;
use Chargebee\Responses\CustomerResponse\ContactsForCustomerCustomerResponse;
use Chargebee\Responses\CustomerResponse\DeleteContactCustomerResponse;
use Chargebee\Responses\CustomerResponse\ListCustomerResponse;
use Chargebee\Responses\CustomerResponse\DeleteCustomerResponse;
use Chargebee\Responses\CustomerResponse\MergeCustomerResponse;
use Chargebee\Responses\CustomerResponse\DeleteRelationshipCustomerResponse;
use Chargebee\Responses\CustomerResponse\CreateCustomerResponse;
use Chargebee\Responses\CustomerResponse\RecordExcessPaymentCustomerResponse;
use Chargebee\Responses\CustomerResponse\AssignPaymentRoleCustomerResponse;
use Chargebee\Responses\CustomerResponse\AddPromotionalCreditsCustomerResponse;
use Chargebee\Actions\Contracts\CustomerActionsInterface;
use Chargebee\Responses\CustomerResponse\ClearPersonalDataCustomerResponse;
use Chargebee\Responses\CustomerResponse\ListHierarchyDetailCustomerResponse;
use Chargebee\Responses\CustomerResponse\ChangeBillingDateCustomerResponse;
use Chargebee\Responses\CustomerResponse\UpdateContactCustomerResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\CustomerResponse\RelationshipsCustomerResponse;
use Chargebee\Responses\CustomerResponse\DeductPromotionalCreditsCustomerResponse;
use Chargebee\Responses\CustomerResponse\SetPromotionalCreditsCustomerResponse;
use Chargebee\Responses\CustomerResponse\CollectPaymentCustomerResponse;
use Chargebee\Responses\CustomerResponse\UpdateBillingInfoCustomerResponse;
use Chargebee\Responses\CustomerResponse\HierarchyCustomerResponse;
use Chargebee\Responses\CustomerResponse\UpdateCustomerResponse;
use Chargebee\ValueObjects\Encoders\URLFormEncoder;
use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Chargebee\ValueObjects\APIRequester;
use Chargebee\HttpClient\HttpClientFactory;
use Chargebee\Environment;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

final class CustomerActions implements CustomerActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/delete-a-customer?lang=php-v4
    *   @param array{
    *     delete_payment_method?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $params = [], array $headers = []): DeleteCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/add-promotional-credits-to-a-customer?lang=php-v4
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return AddPromotionalCreditsCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addPromotionalCredits(string $id, array $params, array $headers = []): AddPromotionalCreditsCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"add_promotional_credits"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AddPromotionalCreditsCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/link-a-customer?lang=php-v4
    *   @param array{
    *     parent_account_access?: array{
    *     portal_edit_child_subscriptions?: string,
    *     portal_download_child_invoices?: string,
    *     send_subscription_emails?: bool,
    *     send_payment_emails?: bool,
    *     send_invoice_emails?: bool,
    *     },
    * child_account_access?: array{
    *     portal_edit_subscriptions?: string,
    *     portal_download_invoices?: string,
    *     send_subscription_emails?: bool,
    *     send_payment_emails?: bool,
    *     send_invoice_emails?: bool,
    *     },
    * parent_id?: string,
    *     payment_owner_id?: string,
    *     invoice_owner_id?: string,
    *     use_default_hierarchy_settings?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RelationshipsCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function relationships(string $id, array $params = [], array $headers = []): RelationshipsCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"relationships"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RelationshipsCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/delink-a-customer?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteRelationshipCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteRelationship(string $id, array $headers = []): DeleteRelationshipCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"delete_relationship"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteRelationshipCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/delete-contacts-for-a-customer?lang=php-v4
    *   @param array{
    *     contact?: array{
    *     id?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteContactCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteContact(string $id, array $params, array $headers = []): DeleteContactCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"delete_contact"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteContactCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/assign-payment-role?lang=php-v4
    *   @param array{
    *     payment_source_id?: string,
    *     role?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AssignPaymentRoleCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function assignPaymentRole(string $id, array $params, array $headers = []): AssignPaymentRoleCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"assign_payment_role"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AssignPaymentRoleCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/move-a-customer?lang=php-v4
    *   @param array{
    *     id_at_from_site?: string,
    *     from_site?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return MoveCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function move(array $params, array $headers = []): MoveCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers","move"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return MoveCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/get-hierarchy?lang=php-v4
    *   @param array{
    *     hierarchy_operation_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return HierarchyCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function hierarchy(string $id, array $params, array $headers = []): HierarchyCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id,"hierarchy"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return HierarchyCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/update-payment-method-for-a-customer?lang=php-v4
    *   @param array{
    *     payment_method?: array{
    *     type?: string,
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     tmp_token?: string,
    *     issuing_country?: string,
    *     additional_information?: mixed,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePaymentMethodCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updatePaymentMethod(string $id, array $params, array $headers = []): UpdatePaymentMethodCustomerResponse
    {
        $jsonKeys = [
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"update_payment_method"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdatePaymentMethodCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/retrieve-a-customer?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrieveCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/update-a-customer?lang=php-v4
    *   @param array{
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     preferred_currency_code?: string,
    *     phone?: string,
    *     company?: string,
    *     auto_collection?: string,
    *     allow_direct_debit?: bool,
    *     net_term_days?: int,
    *     taxability?: string,
    *     exemption_details?: array<mixed>,
    * customer_type?: string,
    *     client_profile_id?: string,
    *     taxjar_exemption_category?: string,
    *     locale?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     offline_payment_method?: string,
    *     invoice_notes?: string,
    *     auto_close_invoices?: bool,
    *     meta_data?: mixed,
    *     fraud_flag?: string,
    *     consolidated_invoicing?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateCustomerResponse
    {
        $jsonKeys = [
            "exemptionDetails" => 0,
            "metaData" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/list-hierarchy-details?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     hierarchy_operation_type?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ListHierarchyDetailCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listHierarchyDetail(string $id, array $params, array $headers = []): ListHierarchyDetailCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id,"hierarchy_detail"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListHierarchyDetailCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/change-billing-date?lang=php-v4
    *   @param array{
    *     billing_date?: int,
    *     billing_month?: int,
    *     billing_date_mode?: string,
    *     billing_day_of_week?: string,
    *     billing_day_of_week_mode?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ChangeBillingDateCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function changeBillingDate(string $id, array $params = [], array $headers = []): ChangeBillingDateCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"change_billing_date"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ChangeBillingDateCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/list-customers?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     relationship?: array{
    *     parent_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     payment_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     invoice_owner_id?: array{
    *         is?: string,
    *             is_not?: string,
    *             starts_with?: string,
    *             },
    *     },
    * include_deleted?: bool,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * first_name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * last_name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * email?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * company?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * phone?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     is_present?: mixed,
    *     },
    * auto_collection?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * taxability?: array{
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
    * offline_payment_method?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * auto_close_invoices?: array{
    *     is?: mixed,
    *     },
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/create-a-customer?lang=php-v4
    *   @param array{
    *     card?: array{
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     tmp_token?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     ip_address?: string,
    *     additional_information?: mixed,
    *     },
    * bank_account?: array{
    *     gateway_account_id?: string,
    *     iban?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     email?: string,
    *     phone?: string,
    *     bank_name?: string,
    *     account_number?: string,
    *     routing_number?: string,
    *     bank_code?: string,
    *     account_type?: string,
    *     account_holder_type?: string,
    *     echeck_type?: string,
    *     issuing_country?: string,
    *     swedish_identity_number?: string,
    *     billing_address?: mixed,
    *     },
    * payment_method?: array{
    *     type?: string,
    *     gateway?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     tmp_token?: string,
    *     issuing_country?: string,
    *     additional_information?: mixed,
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
    * billing_address?: array{
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
    * entity_identifiers?: array<array{
    *     id?: string,
    *     scheme?: string,
    *     value?: string,
    *     standard?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     preferred_currency_code?: string,
    *     phone?: string,
    *     company?: string,
    *     auto_collection?: string,
    *     net_term_days?: int,
    *     allow_direct_debit?: bool,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     entity_identifier_scheme?: string,
    *     entity_identifier_standard?: string,
    *     registered_for_gst?: bool,
    *     is_einvoice_enabled?: bool,
    *     einvoicing_method?: string,
    *     taxability?: string,
    *     exemption_details?: array<mixed>,
    * customer_type?: string,
    *     client_profile_id?: string,
    *     taxjar_exemption_category?: string,
    *     business_customer_without_vat_number?: bool,
    *     locale?: string,
    *     entity_code?: string,
    *     exempt_number?: string,
    *     meta_data?: mixed,
    *     offline_payment_method?: string,
    *     auto_close_invoices?: bool,
    *     consolidated_invoicing?: bool,
    *     token_id?: string,
    *     business_entity_id?: string,
    *     created_from_ip?: string,
    *     invoice_notes?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params = [], array $headers = []): CreateCustomerResponse
    {
        $jsonKeys = [
            "exemptionDetails" => 0,
            "metaData" => 0,
            "additionalInformation" => 1,
            "billingAddress" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/add-contacts-to-a-customer?lang=php-v4
    *   @param array{
    *     contact?: array{
    *     id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     phone?: string,
    *     label?: string,
    *     enabled?: bool,
    *     send_billing_email?: bool,
    *     send_account_email?: bool,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return AddContactCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function addContact(string $id, array $params, array $headers = []): AddContactCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"add_contact"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return AddContactCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/list-of-contacts-for-a-customer?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ContactsForCustomerCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function contactsForCustomer(string $id, array $params = [], array $headers = []): ContactsForCustomerCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["customers",$id,"contacts"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ContactsForCustomerCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/deduct-promotional-credits-for-a-customer?lang=php-v4
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return DeductPromotionalCreditsCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deductPromotionalCredits(string $id, array $params, array $headers = []): DeductPromotionalCreditsCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"deduct_promotional_credits"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeductPromotionalCreditsCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/clear-personal-data-of-a-customer?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ClearPersonalDataCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function clearPersonalData(string $id, array $headers = []): ClearPersonalDataCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"clear_personal_data"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ClearPersonalDataCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/merge-customers?lang=php-v4
    *   @param array{
    *     from_customer_id?: string,
    *     to_customer_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return MergeCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function merge(array $params, array $headers = []): MergeCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers","merge"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return MergeCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/collect-payment-for-customer?lang=php-v4
    *   @param array{
    *     payment_method?: array{
    *     type?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     tmp_token?: string,
    *     additional_information?: mixed,
    *     },
    * card?: array{
    *     gateway_account_id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     number?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     cvv?: string,
    *     preferred_scheme?: string,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_zip?: string,
    *     billing_country?: string,
    *     additional_information?: mixed,
    *     },
    * payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     gw_payment_method_id?: string,
    *     reference_id?: string,
    *     additional_information?: mixed,
    *     },
    * invoice_allocations?: array<array{
    *     invoice_id?: string,
    *     allocation_amount?: int,
    *     }>,
    *     amount?: int,
    *     payment_source_id?: string,
    *     token_id?: string,
    *     replace_primary_payment_source?: bool,
    *     retain_payment_source?: bool,
    *     payment_initiator?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CollectPaymentCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function collectPayment(string $id, array $params, array $headers = []): CollectPaymentCustomerResponse
    {
        $jsonKeys = [
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"collect_payment"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CollectPaymentCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/record-an-excess-payment-for-a-customer?lang=php-v4
    *   @param array{
    *     transaction?: array{
    *     id?: string,
    *     amount?: int,
    *     currency_code?: string,
    *     date?: int,
    *     payment_method?: string,
    *     reference_number?: string,
    *     custom_payment_method_id?: string,
    *     },
    * comment?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RecordExcessPaymentCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function recordExcessPayment(string $id, array $params, array $headers = []): RecordExcessPaymentCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"record_excess_payment"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RecordExcessPaymentCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/set-promotional-credits-for-a-customer?lang=php-v4
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     description?: string,
    *     credit_type?: string,
    *     reference?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @deprecated This method is deprecated and will be removed in a future version.
    *   @param array<string, string> $headers
    *   @return SetPromotionalCreditsCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function setPromotionalCredits(string $id, array $params, array $headers = []): SetPromotionalCreditsCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"set_promotional_credits"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return SetPromotionalCreditsCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/update-contacts-for-a-customer?lang=php-v4
    *   @param array{
    *     contact?: array{
    *     id?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     phone?: string,
    *     label?: string,
    *     enabled?: bool,
    *     send_billing_email?: bool,
    *     send_account_email?: bool,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateContactCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateContact(string $id, array $params, array $headers = []): UpdateContactCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"update_contact"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateContactCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/update-hierarchy-access-settings-for-a-customer?lang=php-v4
    *   @param array{
    *     parent_account_access?: array{
    *     portal_edit_child_subscriptions?: string,
    *     portal_download_child_invoices?: string,
    *     send_subscription_emails?: bool,
    *     send_payment_emails?: bool,
    *     send_invoice_emails?: bool,
    *     },
    * child_account_access?: array{
    *     portal_edit_subscriptions?: string,
    *     portal_download_invoices?: string,
    *     send_subscription_emails?: bool,
    *     send_payment_emails?: bool,
    *     send_invoice_emails?: bool,
    *     },
    * use_default_hierarchy_settings?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateHierarchySettingsCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateHierarchySettings(string $id, array $params = [], array $headers = []): UpdateHierarchySettingsCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"update_hierarchy_settings"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateHierarchySettingsCustomerResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/customers/update-billing-info-for-a-customer?lang=php-v4
    *   @param array{
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
    * entity_identifiers?: array<array{
    *     id?: string,
    *     scheme?: string,
    *     value?: string,
    *     operation?: string,
    *     standard?: string,
    *     }>,
    *     tax_providers_fields?: array<array{
    *     provider_name?: string,
    *     field_id?: string,
    *     field_value?: string,
    *     }>,
    *     vat_number?: string,
    *     vat_number_prefix?: string,
    *     entity_identifier_scheme?: string,
    *     entity_identifier_standard?: string,
    *     registered_for_gst?: bool,
    *     business_customer_without_vat_number?: bool,
    *     is_einvoice_enabled?: bool,
    *     einvoicing_method?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateBillingInfoCustomerResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateBillingInfo(string $id, array $params = [], array $headers = []): UpdateBillingInfoCustomerResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["customers",$id,"update_billing_info"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateBillingInfoCustomerResponse::from($respObject->data, $respObject->headers);
    }

}
?>