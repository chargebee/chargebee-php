<?php

namespace Chargebee\Utils;

use Exception;

class Util
{
    public static function toCamelCaseFromUnderscore($str)
    {
        $func = function ($c) {
            return strtoupper($c[1]);
        };

        return preg_replace_callback('/_([a-z])/', $func, $str);
    }

    public static function toUnderscoreFromCamelCase($str)
    {
        $func = function ($c) {
            return "_" . strtolower($c[1]);
        };

        if (preg_match('/_/', $str)) {
            return $str;
        }

        return preg_replace_callback('/([A-Z])/', $func, $str);
    }

    public static function asString($value)
    {
        if (is_null($value)) {
            return '';
        } elseif (is_bool($value)) {
            return ($value) ? 'true' : 'false';
        } else {
            return (string)$value;
        }
    }

    public static function encodeURIPath()
    {
        $uriPaths = "";

        foreach (func_get_args() as $arg) {
            $arg = trim($arg);

            if ($arg == null || strlen($arg) < 1) {
                throw new Exception("Id cannot be null or empty");
            }

            $uriPaths .= "/" . implode('/', array_map('rawurlencode', explode('/', $arg)));
        }

        return $uriPaths;
    }

    public static function generateUUIDv4(): string
    {
        $bytes = openssl_random_pseudo_bytes(16);
        if ($bytes === false) {
            $bytes = '';
            for ($i = 0; $i < 16; $i++) {
                $bytes .= chr(mt_rand(0, 255));
            }
        }
        $byteArray = array_values(unpack('C*', $bytes));
        $byteArray[6] = ($byteArray[6] & 0x0f) | 0x40;
        $byteArray[8] = ($byteArray[8] & 0x3f) | 0x80;
        $hex = '';
        foreach ($byteArray as $byte) {
            $hex .= sprintf('%02x', $byte);
        }

        return sprintf('%s-%s-%s-%s-%s', substr($hex, 0, 8), substr($hex, 8, 4), substr($hex, 12, 4), substr($hex, 16, 4), substr($hex, 20, 12));
    }
}