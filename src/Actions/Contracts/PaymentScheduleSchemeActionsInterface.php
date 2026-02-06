<?php
namespace Chargebee\Actions\Contracts;
    
use Chargebee\Responses\PaymentScheduleSchemeResponse\DeletePaymentScheduleSchemeResponse;
use Chargebee\Responses\PaymentScheduleSchemeResponse\RetrievePaymentScheduleSchemeResponse;
use Chargebee\Responses\PaymentScheduleSchemeResponse\CreatePaymentScheduleSchemeResponse;
use Exception;
use Chargebee\Exceptions\PaymentException;
use Chargebee\Exceptions\OperationFailedException;
use Chargebee\Exceptions\APIError;
use Chargebee\Exceptions\InvalidRequestException;

Interface PaymentScheduleSchemeActionsInterface
{

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes/retrieve-a-payment-schedule-scheme?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return RetrievePaymentScheduleSchemeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function retrieve(string $id, array $headers = []): RetrievePaymentScheduleSchemeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes/create-a-payment-schedule-scheme?lang=php-v4
    *   @param array{
    *     flexible_schedules?: array<array{
    *     period?: int,
    *     amount_percentage?: float,
    *     }>,
    *     number_of_schedules?: int,
    *     period_unit?: string,
    *     period?: int,
    *     name?: string,
    *     } $params Description of the parameters
    *   
    *   @param array<string, string> $headers
    *   @return CreatePaymentScheduleSchemeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function create(array $params, array $headers = []): CreatePaymentScheduleSchemeResponse;

    /**
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes/delete-a-payment-schedule-scheme?lang=php-v4
    *   
    *   @param string $id  
    *   @param array<string, string> $headers
    *   @return DeletePaymentScheduleSchemeResponse
    *   @throws PaymentException
    *   @throws OperationFailedException
    *   @throws APIError
    *   @throws InvalidRequestException
    *   @throws Exception
    */
    public function delete(string $id, array $headers = []): DeletePaymentScheduleSchemeResponse;

}
?>