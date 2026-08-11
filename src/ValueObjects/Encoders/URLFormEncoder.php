<?php

namespace Chargebee\ValueObjects\Encoders;
use Chargebee\Utils\Util;
use Exception;

class URLFormEncoder implements ParamEncoderInterface
{
    /**
     * Filter operators whose value is the whole array, sent as a single field
     * (e.g. updated_at[between]=[1704067200,1717199999]).
     */
    private const ARRAY_OPERATORS = ['in', 'not_in', 'between'];

    /**
     * @param array $params.
     * @param array $jsonKeys.
     * @return string raw request body
     */

    public static function encode(array $params, array $jsonKeys = [])
    {
        return http_build_query(self::serialize($params, null, null, $jsonKeys));
    }

    private static function serialize($value, $prefix = null, $idx = null, $jsonKeys = null, $level = 0): array
    {
        if ($value && !is_array($value)) {
            throw new Exception("only arrays are allowed as value");
        }

        $serialized = [];
        foreach ($value as $k => $v) {
            $camelCaseKey = Util::toCamelCaseFromUnderscore($k);
            $shouldJsonEncode = isset($jsonKeys[$camelCaseKey]) && $jsonKeys[$camelCaseKey] === $level;
            if ($shouldJsonEncode) {
                $usK = Util::toUnderscoreFromCamelCase($k);
                $key = (!is_null($prefix) ? $prefix : '') .
                    (!is_null($prefix) ? '[' . $usK . ']' : $usK) .
                    (!is_null($idx) ? '[' . $idx . ']' : '');
                $serialized[$key] = is_string($v) ? $v : json_encode((is_array($v) && $v === []) ? (object)[] : $v);
            } else if (is_array($v) && $v !== [] && !is_int($k) && in_array(Util::toUnderscoreFromCamelCase($k), self::ARRAY_OPERATORS, true)) {
                // An empty filter is not a filter, so it falls through to the
                // recursion below and leaves nothing in the request.
                $usK = Util::toUnderscoreFromCamelCase($k);
                $key = (!is_null($prefix) ? $prefix . '[' . $usK . ']' : $usK) . (!is_null($idx) ? '[' . $idx . ']' : '');
                $serialized[$key] = json_encode($v);
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