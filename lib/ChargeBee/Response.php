<?php

namespace ChargeBee\ChargeBee;

class Response {
    public $data;
    public $headers;

    public function __construct($data, $headers) {
        $this->data = $data;
        $this->headers = $headers;
    }
}
