<?php
namespace Chargebee\Actions;

use Chargebee\Responses\PricingPageSessionResponse\CreateForNewSubscriptionPricingPageSessionResponse;
use Chargebee\Responses\PricingPageSessionResponse\CreateForExistingSubscriptionPricingPageSessionResponse;
use Chargebee\Actions\Contracts\PricingPageSessionActionsInterface;
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

final class PricingPageSessionActions implements PricingPageSessionActionsInterface
{
    private HttpClientFactory $httpClientFactory;
    private Environment $env;
    public function __construct(HttpClientFactory $httpClientFactory, Environment $env){
       $this->httpClientFactory = $httpClientFactory;
       $this->env = $env;
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/pricing_page_sessions?lang=php#create_pricing_page_for_existing_subscription
    *   @param array{
    *     pricing_page?: array{
    *     id?: string,
    *     },
    * subscription?: array{
    *     id?: string,
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
    *     quantity?: int,
    *     label?: string,
    *     }>,
    *     redirect_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForExistingSubscriptionPricingPageSessionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForExistingSubscription(array $params, array $headers = []): CreateForExistingSubscriptionPricingPageSessionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["pricing_page_sessions","create_for_existing_subscription"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateForExistingSubscriptionPricingPageSessionResponse::from($respObject->data, $respObject->headers);
    }

    /**
    *   @see https://apidocs.chargebee.com/docs/api/pricing_page_sessions?lang=php#create_pricing_page_for_new_subscription
    *   @param array{
    *     pricing_page?: array{
    *     id?: string,
    *     },
    * subscription?: array{
    *     id?: string,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     company?: string,
    *     phone?: string,
    *     locale?: string,
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
    *     quantity?: int,
    *     label?: string,
    *     }>,
    *     redirect_url?: string,
    *     business_entity_id?: string,
    *     auto_select_local_currency?: bool,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateForNewSubscriptionPricingPageSessionResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function createForNewSubscription(array $params, array $headers = []): CreateForNewSubscriptionPricingPageSessionResponse
    {
        $jsonKeys = [
        ];
        $payload = ChargebeePayload::builder()
        ->withEnvironment($this->env)
        ->withHttpMethod("post")
        ->withUriPaths(["pricing_page_sessions","create_for_new_subscription"])
        ->withParamEncoder( new URLFormEncoder())
        ->withSubDomain(null)
        ->withJsonKeys($jsonKeys)
        ->withHeaders($headers)
        ->withParams($params)
        ->withIdempotent(true)
        ->build();
        $apiRequester = new APIRequester($this->httpClientFactory, $this->env);
        $respObject = $apiRequester->makeRequest($payload);
        return CreateForNewSubscriptionPricingPageSessionResponse::from($respObject->data, $respObject->headers);
    }

}
?>