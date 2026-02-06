<?php
namespace Chargebee\Actions;

use Chargebee\Responses\PaymentSourceResponse\DeletePaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\RetrievePaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\UpdateBankAccountPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\CreateUsingTokenPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\UpdateCardPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\DeleteLocalPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\CreateCardPaymentSourceResponse;
use Chargebee\ValueObjects\Encoders\ListParamEncoder;
use Chargebee\Responses\PaymentSourceResponse\CreateUsingPermanentTokenPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\SwitchGatewayAccountPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\CreateUsingTempTokenPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\CreateBankAccountPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\ListPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\ExportPaymentSourcePaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\CreateUsingPaymentIntentPaymentSourceResponse;
use Chargebee\Actions\Contracts\PaymentSourceActionsInterface;
use Chargebee\Responses\PaymentSourceResponse\VerifyBankAccountPaymentSourceResponse;
use Chargebee\Responses\PaymentSourceResponse\CreateVoucherPaymentSourcePaymentSourceResponse;
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

final class PaymentSourceActions implements PaymentSourceActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-using-permanent-token?lang=php-v4
    *   @param array{
    *     card?: array{
    *     last4?: string,
    *     iin?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     brand?: string,
    *     funding_type?: string,
    *     },
    * billing_address?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     line1?: string,
    *     line2?: string,
    *     line3?: string,
    *     city?: string,
    *     state_code?: string,
    *     state?: string,
    *     zip?: string,
    *     country?: string,
    *     },
    * customer_id?: string,
    *     type?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     issuing_country?: string,
    *     replace_primary_payment_source?: bool,
    *     payment_method_token?: string,
    *     customer_profile_token?: string,
    *     network_transaction_id?: string,
    *     mandate_id?: string,
    *     skip_retrieval?: bool,
    *     additional_information?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsingPermanentTokenPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createUsingPermanentToken(array $params, array $headers = []): CreateUsingPermanentTokenPaymentSourceResponse
    {
        $jsonKeys = [
            "additionalInformation" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_using_permanent_token"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateUsingPermanentTokenPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/delete-a-payment-source?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeletePaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeletePaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"delete"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeletePaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-a-card-payment-source?lang=php-v4
    *   @param array{
    *     card?: array{
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
    * customer_id?: string,
    *     replace_primary_payment_source?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateCardPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createCard(array $params, array $headers = []): CreateCardPaymentSourceResponse
    {
        $jsonKeys = [
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_card"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateCardPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/verify-bank-account-payment-source?lang=php-v4
    *   @param array{
    *     amount1?: int,
    *     amount2?: int,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return VerifyBankAccountPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function verifyBankAccount(string $id, array $params, array $headers = []): VerifyBankAccountPaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"verify_bank_account"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return VerifyBankAccountPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/list-payment-sources?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     subscription_id?: string,
    *     include_deleted?: bool,
    *     customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * type?: array{
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
    * created_at?: array{
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
    *   @return ListPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListPaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["payment_sources"])
        ->withParamEncoder(new ListParamEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ListPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/export-payment-source?lang=php-v4
    *   @param array{
    *     gateway_account_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ExportPaymentSourcePaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function exportPaymentSource(string $id, array $params, array $headers = []): ExportPaymentSourcePaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"export_payment_source"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return ExportPaymentSourcePaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-using-payment-intent?lang=php-v4
    *   @param array{
    *     payment_intent?: array{
    *     id?: string,
    *     gateway_account_id?: string,
    *     gw_token?: string,
    *     payment_method_type?: string,
    *     reference_id?: string,
    *     gw_payment_method_id?: string,
    *     additional_info?: mixed,
    *     additional_information?: mixed,
    *     },
    * customer_id?: string,
    *     replace_primary_payment_source?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsingPaymentIntentPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createUsingPaymentIntent(array $params, array $headers = []): CreateUsingPaymentIntentPaymentSourceResponse
    {
        $jsonKeys = [
            "additionalInfo" => 1,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_using_payment_intent"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateUsingPaymentIntentPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/retrieve-a-payment-source?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("get")
        ->withUriPaths(["payment_sources",$id])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return RetrievePaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-a-voucher-payment-method?lang=php-v4
    *   @param array{
    *     voucher_payment_source?: array{
    *     voucher_type?: string,
    *     gateway_account_id?: string,
    *     tax_id?: string,
    *     billing_address?: mixed,
    *     },
    * customer_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateVoucherPaymentSourcePaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createVoucherPaymentSource(array $params, array $headers = []): CreateVoucherPaymentSourcePaymentSourceResponse
    {
        $jsonKeys = [
            "billingAddress" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_voucher_payment_source"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateVoucherPaymentSourcePaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-using-gateway-temporary-token?lang=php-v4
    *   @param array{
    *     customer_id?: string,
    *     gateway_account_id?: string,
    *     type?: string,
    *     tmp_token?: string,
    *     issuing_country?: string,
    *     replace_primary_payment_source?: bool,
    *     additional_information?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsingTempTokenPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createUsingTempToken(array $params, array $headers = []): CreateUsingTempTokenPaymentSourceResponse
    {
        $jsonKeys = [
            "additionalInformation" => 0,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_using_temp_token"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateUsingTempTokenPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/update-a-card-payment-source?lang=php-v4
    *   @param array{
    *     card?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     expiry_month?: int,
    *     expiry_year?: int,
    *     billing_addr1?: string,
    *     billing_addr2?: string,
    *     billing_city?: string,
    *     billing_zip?: string,
    *     billing_state_code?: string,
    *     billing_state?: string,
    *     billing_country?: string,
    *     additional_information?: mixed,
    *     },
    * gateway_meta_data?: mixed,
    *     reference_transaction?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateCardPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateCard(string $id, array $params = [], array $headers = []): UpdateCardPaymentSourceResponse
    {
        $jsonKeys = [
            "gatewayMetaData" => 0,
            "additionalInformation" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"update_card"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateCardPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/switch-gateway-account?lang=php-v4
    *   @param array{
    *     gateway_account_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return SwitchGatewayAccountPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function switchGatewayAccount(string $id, array $params, array $headers = []): SwitchGatewayAccountPaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"switch_gateway_account"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return SwitchGatewayAccountPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-using-chargebee-token?lang=php-v4
    *   @param array{
    *     customer_id?: string,
    *     replace_primary_payment_source?: bool,
    *     token_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateUsingTokenPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createUsingToken(array $params, array $headers = []): CreateUsingTokenPaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_using_token"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateUsingTokenPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/local-delete-a-payment-source?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteLocalPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function deleteLocal(string $id, array $headers = []): DeleteLocalPaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"delete_local"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return DeleteLocalPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/create-a-bank-account-payment-source?lang=php-v4
    *   @param array{
    *     bank_account?: array{
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
    *     swedish_identity_number?: string,
    *     billing_address?: mixed,
    *     },
    * customer_id?: string,
    *     issuing_country?: string,
    *     replace_primary_payment_source?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateBankAccountPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createBankAccount(array $params, array $headers = []): CreateBankAccountPaymentSourceResponse
    {
        $jsonKeys = [
            "billingAddress" => 1,
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources","create_bank_account"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateBankAccountPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_sources/update-a-bank-account-payment-source?lang=php-v4
    *   @param array{
    *     bank_account?: array{
    *     first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateBankAccountPaymentSourceResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function updateBankAccount(string $id, array $params = [], array $headers = []): UpdateBankAccountPaymentSourceResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["payment_sources",$id,"update_bank_account"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return UpdateBankAccountPaymentSourceResponse::from($respObject->data, $respObject->headers);
    }

}
?>