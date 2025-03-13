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
}