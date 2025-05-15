<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PriceVariantResponse\ListPriceVariantResponse;
use Chargebee\Responses\PriceVariantResponse\CreatePriceVariantResponse;
use Chargebee\Responses\PriceVariantResponse\UpdatePriceVariantResponse;
use Chargebee\Responses\PriceVariantResponse\DeletePriceVariantResponse;
use Chargebee\Responses\PriceVariantResponse\RetrievePriceVariantResponse;

Interface PriceVariantActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_variants?lang=php#delete_a_price_variant
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeletePriceVariantResponse
    */
    public function delete(string $id, array $headers = []): DeletePriceVariantResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_variants?lang=php#list_price_variants
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     id?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
    *     in?: mixed,
    *     not_in?: mixed,
    *     },
    * name?: array{
    *     is?: mixed,
    *     is_not?: mixed,
    *     starts_with?: mixed,
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
    * business_entity_id?: array{
    *     is_present?: mixed,
    *     is?: mixed,
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
    *   @return ListPriceVariantResponse
    */
    public function all(array $params = [], array $headers = []): ListPriceVariantResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_variants?lang=php#create_a_price_variant
    *   @param array{
    *     attributes?: array<array{
    *     name?: string,
    *     value?: string,
    *     }>,
    *     id?: string,
    *     name?: string,
    *     external_name?: string,
    *     description?: string,
    *     variant_group?: string,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePriceVariantResponse
    */
    public function create(array $params, array $headers = []): CreatePriceVariantResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_variants?lang=php#retrieve_a_price_variant
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePriceVariantResponse
    */
    public function retrieve(string $id, array $headers = []): RetrievePriceVariantResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_variants?lang=php#update_a_price_variant
    *   @param array{
    *     attributes?: array<array{
    *     name?: string,
    *     value?: string,
    *     }>,
    *     name?: string,
    *     external_name?: string,
    *     description?: string,
    *     variant_group?: string,
    *     status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePriceVariantResponse
    */
    public function update(string $id, array $params, array $headers = []): UpdatePriceVariantResponse;

}
?>