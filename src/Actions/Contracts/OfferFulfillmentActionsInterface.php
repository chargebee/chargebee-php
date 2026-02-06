<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\OfferFulfillmentResponse\OfferFulfillmentsUpdateOfferFulfillmentResponse;
use Chargebee\Responses\OfferFulfillmentResponse\OfferFulfillmentsGetOfferFulfillmentResponse;
use Chargebee\Responses\OfferFulfillmentResponse\OfferFulfillmentsOfferFulfillmentResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface OfferFulfillmentActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_fulfillments/create-an-offer-fulfillment?lang=php-v4
    *   @param array{
    *     personalized_offer_id?: string,
    *     option_id?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return OfferFulfillmentsOfferFulfillmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerFulfillments(array $params, array $headers = []): OfferFulfillmentsOfferFulfillmentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_fulfillments/retrieve-an-offer-fulfillment?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OfferFulfillmentsGetOfferFulfillmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerFulfillmentsGet(string $id, array $headers = []): OfferFulfillmentsGetOfferFulfillmentResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/offer_fulfillments/update-an-offer-fulfillment?lang=php-v4
    *   @param array{
    *     id?: string,
    *     status?: string,
    *     failure_reason?: string,
    *     } $params Description of the parameters
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return OfferFulfillmentsUpdateOfferFulfillmentResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function offerFulfillmentsUpdate(string $id, array $params, array $headers = []): OfferFulfillmentsUpdateOfferFulfillmentResponse;

}
?>