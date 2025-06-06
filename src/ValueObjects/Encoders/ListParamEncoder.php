<?php

namespace Chargebee\ValueObjects\Encoders;

use Chargebee\Utils\Util;
use Exception;

class ListParamEncoder implements ParamEncoderInterface
{
    /**
     * @param array $params.
     * @return string 
     */

    public static function encode(array $params, array $jsonKeys = []): string
    {
        $jsonKeys = [
            "in" => 1,
            "not_in" => 1,
            "between" => 1,
        ];
        return http_build_query(self::serialize($params, null, null, $jsonKeys, 0));
    }
    private static function serialize($value, $prefix = null, $idx = null, $jsonKeys = null, $level = 0): array
    {
        if ($value && !is_array($value)) {
            throw new Exception("only arrays are allowed as value");
        }

        $serialized = [];
        foreach ($value as $k => $v) {
            $shouldJsonEncode = isset($jsonKeys[$k]) && $jsonKeys[$k] === $level;
            if ($shouldJsonEncode) {
                $usK = Util::toUnderscoreFromCamelCase($k);
                $key = (!is_null($prefix) ? $prefix : '') .
                    (!is_null($prefix) ? '[' . $usK . ']' : $usK) .
                    (!is_null($idx) ? '[' . $idx . ']' : '');
                $serialized[$key] = is_string($v)?$v:json_encode($v);
            } else if (is_array($v) && !is_int($k)) {
                $tempPrefix = (!is_null($prefix)) ? $prefix . '[' . Util::toUnderscoreFromCamelCase($k) . ']' : Util::toUnderscoreFromCamelCase($k);
                $serialized = array_merge($serialized, self::serialize($v, $tempPrefix, null, $jsonKeys, $level + 1));
            } elseif (is_array($v) && is_int($k)) {
                $serialized = array_merge($serialized, self::serialize($v, $prefix, $k, $jsonKeys, $level));
            } else {
                $usK = Util::toUnderscoreFromCamelCase($k);
                $key = (!is_null($prefix) ? $prefix : '') . (!is_null($prefix) ? '[' . $usK . ']' : $usK) . (!is_null($idx) ? '[' . $idx . ']' : '');
                $serialized[$key] = Util::asString($v);
            }
        }
        return $serialized;
    }
}