<?php

namespace ChargeBee\ChargeBee\HttpClient;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

interface HttpClientFactory
{
    /**
     * @return ClientInterface
     */
    public function createClient();

    /**
     * @throws \Exception
     * @return RequestInterface
     */
    public function createRequest($meth, $headers, $env, $url, $params);
}
