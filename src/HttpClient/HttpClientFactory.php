<?php

namespace Chargebee\HttpClient;

use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

interface HttpClientFactory
{
    /**
     * @return ClientInterface
     */
    public function create() : ClientInterface;

    /**
     * @throws \Exception
     * @return RequestInterface
     */
    public function createRequest(ChargebeePayload $chargebeePayload) : RequestInterface;
}