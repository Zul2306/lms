<?php
function getIpAddress()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = ($remote == "::1" ? "127.0.0.1" : $remote);
    }

    return $ip;
}

if (!function_exists('customCompute')) {
    function customCompute($array)
    {
        if (is_object($array)) {
            return count(get_object_vars($array));
        } elseif (is_array($array)) {
            return count($array);
        } elseif (is_string($array)) {
            return 1;
        } elseif (is_null($array)) {
            return 0;
        } elseif (is_int($array) || is_float($array)) {
            return $array;
        } else {
            // Pastikan hanya memanggil count() pada variabel yang dapat dihitung
            if (is_countable($array)) {
                return count($array);
            } else {
                return 0;
            }
        }
    }
}
