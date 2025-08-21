<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OmnichannelOneTimeOrderResponse\RetrieveOmnichannelOneTimeOrderResponse;
use Chargebee\Responses\OmnichannelOneTimeOrderResponse\ListOmnichannelOneTimeOrderResponse;

Interface OmnichannelOneTimeOrderActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_one_time_orders?lang=php#list_omnichannel_one_time_orders
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     source?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * customer_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListOmnichannelOneTimeOrderResponse
    */
    public function all(array $params = [], array $headers = []): ListOmnichannelOneTimeOrderResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/omnichannel_one_time_orders?lang=php#retrieve_an_omnichannel_one_time_order
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveOmnichannelOneTimeOrderResponse
    */
    public function retrieve(string $id, array $headers = []): RetrieveOmnichannelOneTimeOrderResponse;

}
?>