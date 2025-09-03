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
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes?lang=php#retrieve_a_payment_schedule_scheme
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
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes?lang=php#create_a_payment_schedule_scheme
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
    *   @see https://apidocs.chargebee.com/docs/api/payment_schedule_schemes?lang=php#delete_a_payment_schedule_scheme
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