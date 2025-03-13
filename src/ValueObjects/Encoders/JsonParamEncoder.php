<?php

namespace Chargebee\ValueObjects\Encoders;
use Chargebee\Utils\Util;
use Exception;

class JsonParamEncoder implements ParamEncoderInterface
{
    /**
     * @param array $params.
     * @param array $jsonKeys.
     * @return string 
     */

    public static function encode(array $params, array $jsonKeys = []): string
    {
        return json_encode(self::formatJsonKeysAsSnakeCase($params));
    }

    public static function formatJsonKeysAsSnakeCase($value, $maxDepth = 1000, $currentDepth = 0): array
    {
        if ($value && !is_array($value)) {
            throw new Exception("only arrays are allowed as value");
        }

        if ($currentDepth > $maxDepth) {
            throw new Exception("Maximum recursion depth exceeded");
        }

        $serialized = [];

        foreach ($value as $k => $v) {
            $underscoreKey = Util::toUnderscoreFromCamelCase($k);
            if (is_array($v)) {
                $serialized[$underscoreKey] = self::formatJsonKeysAsSnakeCase($v, $maxDepth, $currentDepth + 1);
            } else {
                $serialized[$underscoreKey] = Util::asString($v);
            }
        }
        return $serialized;
    }

}