<?php

namespace ChargeBee\ChargeBee;

class Environment
{
    private $apiKey;
    private $site;
    private $apiEndPoint;

    private static $default_env;
    public static $scheme = "https";
    public static $chargebeeDomain;

    public static $connectTimeout = 50;
    public static $timeout = 100;

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
}
