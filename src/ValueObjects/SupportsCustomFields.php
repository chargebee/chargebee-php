<?php
namespace Chargebee\ValueObjects;

class SupportsCustomFields {
    protected $_data = [];


    public function __set($key, $value): void
    {
        $this->_data[$key] = $value;
    }

    public function __get($key):mixed
    {
        if (array_key_exists($key, $this->_data)) {
            return $this->_data[$key];
        }
        return null;
    }
    public function __isset($key): bool
    {
        return array_key_exists($key, $this->_data);
    }
}