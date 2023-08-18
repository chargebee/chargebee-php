<?php

namespace ChargeBee\ChargeBee;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

final class GuzzleFactory
{
    /**
     * @param array $opts
     * @return ClientInterface|Client
     */
    public static function createClient($connectTimeoutInSecs, $requestTimeoutInSecs, $opts = [])
    {
        return new Client(
            array_merge(
                [
                    'allow_redirects' => true,
                    'http_errors' => false,
                    'connect_timeout' => $connectTimeoutInSecs,
                    'timeout' => $requestTimeoutInSecs,
                ],
                $opts
            )
        );
    }
}
