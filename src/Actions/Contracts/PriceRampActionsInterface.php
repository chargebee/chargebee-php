<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PriceRampResponse\ListPriceRampResponse;
use Chargebee\Responses\PriceRampResponse\UpdatePriceRampResponse;
use Chargebee\Responses\PriceRampResponse\DeletePriceRampResponse;
use Chargebee\Responses\PriceRampResponse\RetrievePriceRampResponse;
use Chargebee\Responses\PriceRampResponse\CreatePriceRampResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PriceRampActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_ramps/list-price-ramps?lang=php-v4
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
    * item_price_id?: array{
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
    *   @return ListPriceRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function all(array $params = [], array $headers = []): ListPriceRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_ramps/create-a-price-ramp?lang=php-v4
    *   @param array{
    *     ramp_intervals?: array<array{
    *     starting_billing_cycle?: int,
    *     ending_billing_cycle?: int,
    *     apply_catalog_price?: bool,
    *     price?: int,
    *     price_in_decimal?: string,
    *     }>,
    *     item_price_id?: string,
    *     business_entity_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePriceRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreatePriceRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_ramps/delete-a-price-ramp?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeletePriceRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeletePriceRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_ramps/retrieve-a-price-ramp?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePriceRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePriceRampResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/price_ramps/update-a-price-ramp?lang=php-v4
    *   @param array{
    *     ramp_intervals?: array<array{
    *     starting_billing_cycle?: int,
    *     ending_billing_cycle?: int,
    *     apply_catalog_price?: bool,
    *     price?: int,
    *     price_in_decimal?: string,
    *     }>,
    *     status?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return UpdatePriceRampResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function update(string $id, array $params, array $headers = []): UpdatePriceRampResponse;

}
?>