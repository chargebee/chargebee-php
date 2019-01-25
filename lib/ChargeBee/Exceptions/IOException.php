<?php

class ChargeBee_IOException extends Exception {

    private $errorNo;

    function __construct($message, $errorNo) {
        parent::__construct($message);
        $this->errorNo = $errorNo;
    }

    public function getCurlErrorCode() {
        trigger_error('Use ' . ChargeBee_IOException::class . '::getErrorCode() instead', E_USER_DEPRECATED);
        return $this->getErrorCode();
    }

    public function getErrorCode() {
        return $this->errorNo;
    }

}

?>
