<?php

namespace Chargebee;

class Environment
{
    private string $apiKey;
    private string $site;
    private string $apiEndPoint;
    private string $subDomain = "";
    public  string $scheme = "https";
    public  string $chargebeeDomain="chargebee.com";
    public string $userAgentSuffix = "";

    public float $connectTimeoutInSecs = 30;
    public float $requestTimeoutInSecs = 80;

    public float $timeMachineWaitInSecs = 3;
    public float $exportWaitInSecs = 3;

    public string $apiVersion = "v2";

    public function __construct(string $site, string $apiKey)
    {
        $this->site = $site;
        $this->apiKey = $apiKey;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function getSite(): string 
    {
        return $this->site;
    }

    public function getApiEndpoint(): string
    {
        $this->apiEndPoint = $this->scheme . "://$this->site." . $this->chargebeeDomain . "/api/" . $this->apiVersion;
        return $this->apiEndPoint;
    }

    
    private function getSubDomainApiUrl(string $subDomain): string
    {
        return $this->scheme . "://" . $this->getSite() . "." . $subDomain . "." . $this->chargebeeDomain . "/api/" . $this->apiVersion;
    }

    public function apiUrl(string $url, $subDomain = null): string
    {
      if($subDomain != null || $this->subDomain != null) {
          return $this->getSubDomainApiUrl($subDomain) . $url;
      }
      return $this->getApiEndpoint() . $url;
    }

    public function updateConnectTimeoutInSecs(float $connectTimeout): void
    {
        $this->connectTimeoutInSecs = $connectTimeout;
    }

    public function updateRequestTimeoutInSecs(float $requestTimeout): void
    {
        $this->requestTimeoutInSecs = $requestTimeout;

    }

    public function setChargebeeDomain(string $domain): void
    {
        $this->chargebeeDomain = $domain;
    }

    public function setScheme(string $scheme): void {
        $this->scheme = $scheme;
    }
    public function setUserAgentSuffix($suffix){
        $this->userAgentSuffix = $suffix;
    }
}
