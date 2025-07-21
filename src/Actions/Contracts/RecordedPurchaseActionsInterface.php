<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\RecordedPurchaseResponse\RetrieveRecordedPurchaseResponse;
use Chargebee\Responses\RecordedPurchaseResponse\CreateRecordedPurchaseResponse;

Interface RecordedPurchaseActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#retrieve_a_recorded_purchase
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveRecordedPurchaseResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveRecordedPurchaseResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/recorded_purchases?lang=php#record_a_purchase
    *   @param array{
    *     customer?: array{
    *     id?: string,
    *     },
    * apple_app_store?: array{
    *     transaction_id?: string,
    *     receipt?: string,
    *     product_id?: string,
    *     },
    * google_play_store?: array{
    *     purchase_token?: string,
    *     },
    * omnichannel_subscription?: array{
    *     id?: string,
    *     },
    * app_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateRecordedPurchaseResponse
    */
    public function create(array $params, array $headers = []): CreateRecordedPurchaseResponse;

}
?>