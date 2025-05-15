<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\DifferentialPriceResponse\UpdateDifferentialPriceResponse;
use Chargebee\Responses\DifferentialPriceResponse\CreateDifferentialPriceResponse;
use Chargebee\Responses\DifferentialPriceResponse\ListDifferentialPriceResponse;
use Chargebee\Responses\DifferentialPriceResponse\RetrieveDifferentialPriceResponse;
use Chargebee\Responses\DifferentialPriceResponse\DeleteDifferentialPriceResponse;

Interface DifferentialPriceActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/differential_prices?lang=php#delete_a_differential_price
    *   @param array{
    *     item_price_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeleteDifferentialPriceResponse
    */
    public function delete(string $id, array $params, array $headers = []): DeleteDifferentialPriceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/differential_prices?lang=php#create_a_differential_price
    *   @param array{
    *     parent_periods?: array<array{
    *     period_unit?: string,
    *     period?: mixed,
    *     }>,
    *     tiers?: array<array{
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     parent_item_id?: string,
    *     price?: int,
    *     price_in_decimal?: string,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return CreateDifferentialPriceResponse
    */
    public function create(string $id, array $params, array $headers = []): CreateDifferentialPriceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/differential_prices?lang=php#list_differential_prices
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     item_price_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * item_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * parent_item_id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return ListDifferentialPriceResponse
    */
    public function all(array $params = [], array $headers = []): ListDifferentialPriceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/differential_prices?lang=php#retrieve_a_differential_price
    *   @param array{
    *     item_price_id?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrieveDifferentialPriceResponse
    */
    public function retrieve(string $id, array $params, array $headers = []): RetrieveDifferentialPriceResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/differential_prices?lang=php#update_a_differential_price
    *   @param array{
    *     parent_periods?: array<array{
    *     period_unit?: string,
    *     period?: mixed,
    *     }>,
    *     tiers?: array<array{
    *     starting_unit?: int,
    *     ending_unit?: int,
    *     price?: int,
    *     starting_unit_in_decimal?: string,
    *     ending_unit_in_decimal?: string,
    *     price_in_decimal?: string,
    *     pricing_type?: string,
    *     package_size?: int,
    *     }>,
    *     item_price_id?: string,
    *     price?: int,
    *     price_in_decimal?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdateDifferentialPriceResponse
    */
    public function update(string $id, array $params, array $headers = []): UpdateDifferentialPriceResponse;

}
?>