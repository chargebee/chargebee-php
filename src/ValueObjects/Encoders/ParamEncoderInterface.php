<?php 

namespace Chargebee\ValueObjects\Encoders;
interface ParamEncoderInterface{
    /**
     * @param array $params.
     * @param array $jsonKeys.
     * @return string
     */

     public static function encode(array $params, array $jsonKeys = []);

}