<?php

namespace ChargeBee\ChargeBee;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientInterface;

class Environment
{
    private $apiKey;
    private $site;
    private $apiEndPoint;

    private static $default_env;
    private static $httpClient;

    public static $scheme = "https";
    public static $chargebeeDomain;

    public static $connectTimeoutInSecs = 30;
    public static $requestTimeoutInSecs = 80;

    public static $timeMachineWaitInSecs = 3;
    public static $exportWaitInSecs = 3;

    const API_VERSION = "v2";

    public function __construct($site, $apiKey)
    {
        $this->site = $site;
        $this->apiKey = $apiKey;

        if (self::$chargebeeDomain == null) {
            $this->apiEndPoint = "https://$site.chargebee.com/api/" . self::API_VERSION;
        } else {
            $this->apiEndPoint = self::$scheme . "://$site." . self::$chargebeeDomain . "/api/" . self::API_VERSION;
        }

        self::configureClient(new Client());
    }

    public static function configure($site, $apiKey)
    {
        self::$default_env = new self($site, $apiKey);
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getSite()
    {
        return $this->site;
    }

    public function getApiEndpoint()
    {
        return $this->apiEndPoint;
    }

    public static function defaultEnv()
    {
        return self::$default_env;
    }

    public function apiUrl($url)
    {
        return $this->apiEndPoint . $url;
    }

    public static function updateConnectTimeoutInSecs($connectTimeout)
    {
        self::$connectTimeoutInSecs = $connectTimeout;
    }

    public static function updateRequestTimeoutInSecs($requestTimeout)
    {
        self::$requestTimeoutInSecs = $requestTimeout;

    }

    /**
     * @return void
     * Please note that Request class is currently coupled with Guzzle implementation of http client
     */
    public static function configureClient(ClientInterface $client)
    {
        self::$httpClient = $client;
    }

    /**
     * @return ClientInterface
     */
    public static function getClient()
    {
        return self::$httpClient;
    }
}
