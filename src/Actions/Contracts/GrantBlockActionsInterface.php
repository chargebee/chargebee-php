<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\GrantBlockResponse\ListGrantBlocksGrantBlockResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface GrantBlockActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/grant_blocks/list-grant-blocks?lang=php-v4
    *   @param array{
    *     limit?: int,
    *     offset?: string,
    *     subscription_id?: array{
    *     is?: mixed,
    *     },
    * unit_id?: array{
    *     is?: mixed,
    *     },
    * account_type?: array{
    *     is?: mixed,
    *     },
    * effective_from?: array{
    *     after?: mixed,
    *     before?: mixed,
    *     on?: mixed,
    *     between?: mixed,
    *     },
    * expires_at?: array{
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
    *   @return ListGrantBlocksGrantBlockResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function listGrantBlocks(array $params, array $headers = []): ListGrantBlocksGrantBlockResponse;

}
?>