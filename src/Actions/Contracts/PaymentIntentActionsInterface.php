<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PaymentIntentResponse\UpdatePaymentIntentResponse;
use Chargebee\Responses\PaymentIntentResponse\RetrievePaymentIntentResponse;
use Chargebee\Responses\PaymentIntentResponse\CreatePaymentIntentResponse;

Interface PaymentIntentActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents?lang=php#retrieve_a_payment_intent
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentIntentResponse
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentIntentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents?lang=php#update_a_payment_intent
    *   @param array{
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePaymentIntentResponse
    */
    public function update(string $id, array $params = [], array $headers = []): UpdatePaymentIntentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_intents?lang=php#create_a_payment_intent
    *   @param array{
    *     business_entity_id?: string,
    *     customer_id?: string,
    *     amount?: int,
    *     currency_code?: string,
    *     gateway_account_id?: string,
    *     reference_id?: string,
    *     payment_method_type?: string,
    *     success_url?: string,
    *     failure_url?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentIntentResponse
    */
    public function create(array $params, array $headers = []): CreatePaymentIntentResponse;

}
?>