<?php

namespace ChargeBee\ChargeBee\HttpClient;

use ChargeBee\ChargeBee;
use ChargeBee\ChargeBee\Request;
use ChargeBee\ChargeBee\Version;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;

final class GuzzleFactory implements HttpClientFactory
{
    private $options;
    private $connectTimeoutInSecs;
    private $requestTimeoutInSecs;

    /**
     * @param array $options
     * @param float $connectTimeoutInSecs
     * @param float $requestTimeoutInSecs
     */
    public function __construct($connectTimeoutInSecs, $requestTimeoutInSecs, $options = [])
    {
        $this->connectTimeoutInSecs = $connectTimeoutInSecs;
        $this->requestTimeoutInSecs = $requestTimeoutInSecs;
        $this->options = $options;
    }

    /**
     * @return ClientInterface|Client
     */
    public function createClient()
    {
        return new Client(
            array_merge(
                [
                    'allow_redirects' => true,
                    'http_errors' => false,
                    'connect_timeout' => $this->connectTimeoutInSecs,
                    'timeout' => $this->requestTimeoutInSecs
                ],
                $this->options
            )
        );
    }

    /**
     * @throws Exception
     * @return RequestInterface
     */
    public function createRequest($meth, $headers, $env, $url, $params)
    {
        if (!in_array($meth, [Request::GET, Request::POST])) {
            throw new Exception("Invalid http method $meth");
        }

        $userAgent = "Chargebee-PHP-Client" . " v" . Version::VERSION;
        $httpHeaders = array_merge(
            $headers,
            [
                'Accept' => 'application/json',
                'User-Agent' => $userAgent,
                'Lang-Version' => phpversion(),
                'OS-Version' => PHP_OS,
                'Authorization' => 'Basic ' . \base64_encode($env->getApiKey() . ':')
            ]
        );
        $body = null;

        $uri = new Uri($url);

        if ($meth == Request::GET) {
            if (count($params) > 0) {
                $query = \http_build_query($params, '', '&', \PHP_QUERY_RFC3986);
                $uri = $uri->withQuery($query);
            }
        }

        if ($meth == Request::POST) {
            $body = \http_build_query($params, '', '&');
            $httpHeaders['Content-Type'] = 'application/x-www-form-urlencoded';
        }

        return new \GuzzleHttp\Psr7\Request($meth, $uri, $httpHeaders, $body);
    }
}