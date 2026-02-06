<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PersonalizedOfferResponse\PersonalizedOffersPersonalizedOfferResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PersonalizedOfferActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/personalized_offers/list-personalized-offers?lang=php-v4
    *   @param array{
    *     request_context?: array{
    *     user_agent?: string,
    *     locale?: string,
    *     timezone?: string,
    *     url?: string,
    *     referrer_url?: string,
    *     },
    * first_name?: string,
    *     last_name?: string,
    *     email?: string,
    *     roles?: array<string>,
    * external_user_id?: string,
    *     subscription_id?: string,
    *     customer_id?: string,
    *     custom?: mixed,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return PersonalizedOffersPersonalizedOfferResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function personalizedOffers(array $params, array $headers = []): PersonalizedOffersPersonalizedOfferResponse;

}
?>