<?php
namespace ChargeBee;

use ChargeBee\ChargeBee\Environment;

class ChargeBee {
    public static $verifyCaCerts = true;

    public static function getVerifyCaCerts()
    {
        return self::$verifyCaCerts;
    }

    public function __construct($site, $apiKey)
    {
        $this->checkExtentions();
        Environment::configure($site, $apiKey);
    }

    public function getEnvironment() {
        return Environment::defaultEnv();
    }

    public function subscription() {
        return null;
    }

    public static function setVerifyCaCerts($verify) {
        self::$verifyCaCerts = $verify;
    }

    public static function getCaCertPath() {
        return dirname(__FILE__) . "/ssl/ca-certs.crt";
    }

    public function checkExtentions() {
        $extensions = array('curl', 'json');
        foreach ($extensions AS $e) {
            if (!extension_loaded($e)) {
                throw new \Exception('ChargeBee requires the ' . $e . ' extension.');
            }
        }
    }
}
