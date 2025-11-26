<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\ItemResponse\DeleteItemResponse;
use Chargebee\Responses\ItemResponse\UpdateItemResponse;
use Chargebee\Responses\ItemResponse\CreateItemResponse;
use Chargebee\Responses\ItemResponse\RetrieveItemResponse;
use Chargebee\Responses\ItemResponse\ListItemResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface ItemActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#list_items
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     bundle_configuration?: array{
    *     type?: array{
    *         is?: string,
    *             is_not?: string,
    *             in?: string,
    *             not_in?: string,
    *             },
    *     },
    * id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_family_id?: array{
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
    * name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     },
    * item_applicability?: array{
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
    * is_giftable?: array{
    *     is?: mixed,
    *     },
    * updated_at?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * enabled_for_checkout?: array{
    *     is?: mixed,
    *     },
    * enabled_in_portal?: array{
    *     is?: mixed,
    *     },
    * metered?: array{
    *     is?: mixed,
    *     },
    * usage_calculation?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * channel?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * business_entity_id?: array{
    *     is?: mixed,
    *     is_present?: mixed,
    *     },
    * include_site_level_resources?: array{
    *     is?: mixed,
    *     },
    * sort_by?: array{
    *     asc?: string,
    *     desc?: string,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#create_an_item
    *   @param array{
    *     bundle_configuration?: array{
    *     type?: string,
    *     },
    * bundle_items_to_add?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     quantity?: int,
    *     price_allocation?: float,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     type?: string,
    *     description?: string,
    *     item_family_id?: string,
    *     is_giftable?: bool,
    *     is_shippable?: bool,
    *     external_name?: string,
    *     enabled_in_portal?: bool,
    *     redirect_url?: string,
    *     enabled_for_checkout?: bool,
    *     item_applicability?: string,
    *     applicable_items?: array<string>,
    * unit?: string,
    *     gift_claim_redirect_url?: string,
    *     included_in_mrr?: bool,
    *     metered?: bool,
    *     usage_calculation?: string,
    *     is_percentage_pricing?: bool,
    *     metadata?: mixed,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreateItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreateItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#delete_an_item
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeleteItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#retrieve_an_item
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrieveItemResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/items?lang=php#update_an_item
    *   @param array{
    *     bundle_configuration?: array{
    *     type?: string,
    *     },
    * bundle_items_to_add?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     quantity?: int,
    *     price_allocation?: float,
    *     }>,
    *     bundle_items_to_update?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     quantity?: int,
    *     price_allocation?: float,
    *     }>,
    *     bundle_items_to_remove?: array<array{
    *     item_id?: string,
    *     item_type?: string,
    *     }>,
    *     name?: string,
    *     description?: string,
    *     is_shippable?: bool,
    *     external_name?: string,
    *     item_family_id?: string,
    *     enabled_in_portal?: bool,
    *     redirect_url?: string,
    *     enabled_for_checkout?: bool,
    *     item_applicability?: string,
    *     clear_applicable_items?: bool,
    *     applicable_items?: array<string>,
    * unit?: string,
    *     gift_claim_redirect_url?: string,
    *     metadata?: mixed,
    *     included_in_mrr?: bool,
    *     status?: string,
    *     is_percentage_pricing?: bool,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateItemResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params = [], array $headers = []): UpdateItemResponse;

}
?>