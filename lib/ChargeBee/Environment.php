<?php

namespace ChargeBee\ChargeBee;

use ChargeBee\ChargeBee\HttpClient\GuzzleFactory;
use ChargeBee\ChargeBee\HttpClient\HttpClientFactory;

class Environment
{
    private $apiKey;
    private $site;
    private $apiEndPoint;

    private static $default_env;
    private static $httpClientFactory;

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

        self::$httpClientFactory = new GuzzleFactory(self::$connectTimeoutInSecs, self::$requestTimeoutInSecs);
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
     */
    public static function setHttpClientFactory(HttpClientFactory $factory)
    {
        self::$httpClientFactory = $factory;
    }

    /**
     * @return HttpClientFactory
     */
    public static function getHttpClientFactory()
    {
        return self::$httpClientFactory;
    }
}
