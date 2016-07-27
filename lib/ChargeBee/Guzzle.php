<?php

class ChargeBee_Guzzle {

    public static function utf8($value) {
        if (is_string($value))
            return utf8_encode($value);
        else
            return $value;
    }

    public static function doRequest($meth, $url, $env, $params = array(), $headers = array()) {
        list($response, $httpCode) = self::request($meth, $url, $env, $params, $headers);
        $respJson = self::processResponse($response, $httpCode);
        return $respJson;
    }

    public static function request($meth, $url, $env, $params, $headers) {
        $client = new \GuzzleHttp\Client();

        $opts = array(
            'connect_timeout' => ChargeBee_Environment::$connectTimeout,
            'timeout' => ChargeBee_Environment::$timeout,
            'allow_redirects' => true,
            'http_errors' => false
        );
        if ($meth == ChargeBee_Request::GET) {
            if (count($params) > 0) {
                $opts['query'] = $params;
            }
        } else if ($meth == ChargeBee_Request::POST) {
            $opts['form_params'] = $params;
        } else {
            throw new Exception("Invalid http method $meth");
        }
        $url = self::utf8($env->apiUrl($url));

        $userAgent = "Chargebee-PHP-Client" . " v" . ChargeBee_Version::VERSION;
        $httpHeaders = array_merge($headers, ['Accept' => 'application/json', 'User-Agent' => $userAgent]);

        $opts['headers'] = $httpHeaders;
        $opts['auth'] = [$env->getApiKey(), ''];

        // Specifying a CA bundle results in the following error when running in Google App Engine:
        // "Unsupported SSL context options are set. The following options are present, but have been ignored: allow_self_signed, cafile"
        // https://cloud.google.com/appengine/docs/php/outbound-requests#secure_connections_and_https
        $opts['verify'] = ChargeBee::getVerifyCaCerts() && !self::isAppEngine() ? ChargeBee::getCaCertPath() : false;

        $response = null;
        try {
            $response = $client->request($meth, $url, $opts);
        } catch (RequestException $e) {
            $errno = $e->getCode();
            $guzzleMsg = $e->getMessage();
            $message = "IO exception occurred when trying to connect to " . $url . " . Reason : " . $guzzleMsg;
            throw new ChargeBee_IOException($message, $errno);
        }

        $httpCode = $response->getStatusCode();
        return array((string)$response->getBody(), $httpCode);
    }

    /**
     * Recommended way to check if script is running in Google App Engine:
     * https://github.com/google/google-api-php-client/blob/master/src/Google/Client.php#L799
     *
     * @return bool Returns true if running in Google App Engine
     */
    private static function isAppEngine() {
        return (isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'], 'Google App Engine') !== false);
    }

    public static function processResponse($response, $httpCode) {
        $respJson = json_decode($response, true);
        if(!$respJson){
            throw new Exception("Response not in JSON format. Might not be a ChargeBee Response.");
        }
        if ($httpCode < 200 || $httpCode > 299) {
            self::handleAPIRespError($httpCode, $respJson,$response);
        }
        return $respJson;
    }

    public static function handleAPIRespError($httpCode, $respJson,$response) {
        if(!isset($respJson['api_error_code'])){
            throw new Exception("No api_error_code attribute in content. Probably not a ChargeBee's error response. The content is \n " . $response);
        }
        $type="unknown";
        if(isset($respJson['type'])){
            $type = $respJson['type'];
        }
        if ($type == "payment") {
            throw new ChargeBee_PaymentException($httpCode, $respJson);
        } elseif ($type == "operation_failed") {
            throw new ChargeBee_OperationFailedException($httpCode, $respJson);
        } elseif ($type == "invalid_request") {
            throw new ChargeBee_InvalidRequestException($httpCode, $respJson);
        } else {
            throw new ChargeBee_APIError($httpCode, $respJson);
        }
    }

}
