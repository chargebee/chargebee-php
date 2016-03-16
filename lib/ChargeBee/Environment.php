<?php

namespace Chargebee\Chargebee;

class Environment {

    private $apiKey;
    private $site;
    private $apiEndPoint;
    
    private static $default_env;
    public static $scheme = "https";
    public static $chargebeeDomain;

    public static  $connectTimeout= 50;
    public static  $timeout=100;
    
    function __construct($site, $apiKey) {
        $this->site = $site;
        $this->apiKey = $apiKey;
        if (Environment::$chargebeeDomain == null) {
            $this->apiEndPoint = "https://$site.chargebee.com/api/v1";
        } else {
            $this->apiEndPoint = Environment::$scheme . "://$site." . Environment::$chargebeeDomain . "/api/v1";
        }
    }

    public static function configure($site, $apiKey) {
        Environment::$default_env = new Environment($site, $apiKey);
    }

    public function getApiKey() {
        return $this->apiKey;
    }

    public function getSite() {
        return $this->site;
    }

    public function getApiEndpoint() {
        return $this->apiEndPoint;
    }

    /**
     * @return Environment environement
     */
    public static function defaultEnv() {
        return Environment::$default_env;
    }

    public function apiUrl($url) {
        return $this->apiEndPoint . $url;
    }

}
