<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\InAppSubscriptionResponse\ImportSubscriptionInAppSubscriptionResponse;
use Chargebee\Responses\InAppSubscriptionResponse\RetrieveStoreSubsInAppSubscriptionResponse;
use Chargebee\Responses\InAppSubscriptionResponse\ProcessReceiptInAppSubscriptionResponse;
use Chargebee\Responses\InAppSubscriptionResponse\ImportReceiptInAppSubscriptionResponse;

Interface InAppSubscriptionActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions?lang=php#retrieve_store_subscription
    *   @param array{
    *     receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveStoreSubsInAppSubscriptionResponse
    */
    public function retrieveStoreSubs(string $id, array $params, array $headers = []): RetrieveStoreSubsInAppSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions?lang=php#import_receipt
    *   @param array{
    *     product?: array{
    *     currency_code?: string,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     },
    * receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportReceiptInAppSubscriptionResponse
    */
    public function importReceipt(string $id, array $params, array $headers = []): ImportReceiptInAppSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions?lang=php#import_subscription_without_receipt
    *   @param array{
    *     subscription?: array{
    *     id?: string,
    *     started_at?: int,
    *     term_start?: int,
    *     term_end?: int,
    *     product_id?: string,
    *     currency_code?: string,
    *     transaction_id?: string,
    *     is_trial?: bool,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     },
    * } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ImportSubscriptionInAppSubscriptionResponse
    */
    public function importSubscription(string $id, array $params, array $headers = []): ImportSubscriptionInAppSubscriptionResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/in_app_subscriptions?lang=php#process_purchase_command
    *   @param array{
    *     product?: array{
    *     id?: string,
    *     currency_code?: string,
    *     price?: int,
    *     name?: string,
    *     price_in_decimal?: string,
    *     period?: string,
    *     period_unit?: string,
    *     },
    * customer?: array{
    *     id?: string,
    *     email?: string,
    *     first_name?: string,
    *     last_name?: string,
    *     },
    * receipt?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return ProcessReceiptInAppSubscriptionResponse
    */
    public function processReceipt(string $id, array $params, array $headers = []): ProcessReceiptInAppSubscriptionResponse;

}
?>