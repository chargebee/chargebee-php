<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OfferEventResponse\OfferEventsOfferEventResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface OfferEventActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_events/create-an-offer-event?lang=php-v4
    *   @param array{
    *     personalized_offer_id?: string,
    *     type?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return OfferEventsOfferEventResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerEvents(array $params, array $headers = []): OfferEventsOfferEventResponse;

}
?>