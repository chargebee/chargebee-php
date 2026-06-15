<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PromotionalGrantResponse\PromotionalGrantsPromotionalGrantResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PromotionalGrantActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/promotional_grants/create-promotional-grant?lang=php-v4
    *   @param array{
    *     subscription_id?: string,
    *     unit_id?: string,
    *     amount?: string,
    *     expires_at?: int,
    *     metadata?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PromotionalGrantsPromotionalGrantResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function promotionalGrants(array $params, array $headers = []): PromotionalGrantsPromotionalGrantResponse;

}
?>