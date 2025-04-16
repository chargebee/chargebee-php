<?php

namespace Chargebee\HttpClient;

use Chargebee\ValueObjects\Transporters\ChargebeePayload;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Uri;

class GuzzleFactory implements HttpClientFactory
{
    private $options;
    private $conntectTimeoutInSecs;
    private $requestTimeoutInSecs;

    /*
     * @param array $options
     * @param float $connectTimeoutInSecs
     * @param float $requestTimeoutInSecs
     */
    public function __construct($conntectTimeoutInSecs, $requestTimeoutInSecs, $options = [])
    {
        $this->conntectTimeoutInSecs = $conntectTimeoutInSecs;
        $this->requestTimeoutInSecs = $requestTimeoutInSecs;
        $this->options = $options;
    }

    public function create(): \Psr\Http\Client\ClientInterface
    {
        return new Client(
            array_merge(
                [
                    'allow_redirects' => true,
                    'http_errors' => false,
                    'connect_timeout' => $this->conntectTimeoutInSecs,
                    'timeout' => $this->requestTimeoutInSecs,
                ],
                $this->options
            )
        );
    }

    public function createRequest(ChargebeePayload $chargebeePayload): \Psr\Http\Message\RequestInterface
    {
        $httpMethod = $chargebeePayload->getHttpMethod();
        $params = $chargebeePayload->getSerializedParameters();
        $headers = $chargebeePayload->getHeaders();

        if (!in_array($httpMethod, ["get", "post"])) {
            throw new Exception("Invalid http method $httpMethod");
        }

        $url = self::utf8($chargebeePayload->getUrl());
        $uri = new Uri($url);
        $body = null;

        if ($chargebeePayload->getHttpMethod() == "get") {
            if (!empty($params)) {
                $uri = $uri->withQuery($params);
            }
        }

        if ($httpMethod == "post") {
            $body = $params;
        }
        return new \GuzzleHttp\Psr7\Request($httpMethod, $uri, $headers, $body);
    }

    public static function utf8($value)
    {
        if (is_string($value))
            return mb_convert_encoding($value, "UTF-8");
        else
            return $value;
    }
}